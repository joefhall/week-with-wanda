import axios from 'axios';
import jstz from 'jstz';
import store from '../store';
import striptags from 'striptags';
import uuidv4 from 'uuid/v4';

import { addMessage, setEmotion, setIdentity, setInput, setMeltdownLevel, setLoading, setTyping } from '../actions';

let checkMessagesDisplayedTimer;
const minTypingTime = 1000;
const sessionId = uuidv4();
const timeToBeginTyping = 250;

const checkMessagesDisplayed = wandaMessagesCount => {
  const wandaMessagesBubbles = document.querySelectorAll('.chat__messages__message__bubble--wanda');
  const aiViews = document.querySelector('.chat__ai-views');
  
  if (wandaMessagesBubbles && ((wandaMessagesBubbles.length >= wandaMessagesCount) || aiViews)) {
    clearInterval(checkMessagesDisplayedTimer);
    setTimeout(hideLoading, 2500);
  }
};

const getWandaMessagesCount = chatHistory => {
  let count = 0;
  
  for (let chatEntry of chatHistory) {
    if (chatEntry.sender === 'wanda') {
      count++;
    }
  }
  
  return count;
};

const hideLoading = () => {
  const chatMessages = document.querySelector('.chat__messages');
  const chatInput = document.querySelector('.chat__input');
  const chatLoading = document.querySelector('.chat__loading');
  
  if (chatMessages) {
    document.querySelector('.chat__messages').classList.remove('invisible', 'h-0');
  }
  if (chatInput) {
    document.querySelector('.chat__input').classList.remove('d-none');
  }
  if (chatLoading) {
    document.querySelector('.chat__loading').classList.add('d-none');
  }
};

const showError = errorMessage => {
  const errorMessageDisplayed = document.querySelector('.chat__messages__message__error');
  
  if (!errorMessageDisplayed) {
    const emoji = '💩';
    const message = `<div class='chat__messages__message__error'>${errorMessage}. You could try refreshing the page - or email my maker at <a href='mailto:hello@weekwithwanda.com'>hello@weekwithwanda.com</a> if this continues.</div>`;
    const emotion = 'thumbs-down';

    store.dispatch(setEmotion(emotion));

    showResponse({
      emotion: emotion,
      meltdownLevel: 10,
      scenario: '',
      type: 'none',
      user: {none: null},
      wanda: {errorEmoji: emoji}
    }, 'errorEmoji', emoji);

    showResponse({
      emotion: null,
      meltdownLevel: 10,
      scenario: '',
      type: 'none',
      user: {none: null},
      wanda: {error: message}
    }, 'error', message);
  }
};

const showResponse = (responseData, wandaMessageId, wandaMessage) => {
  store.dispatch(setTyping(false));
  store.dispatch(addMessage(Date.now(), responseData.scenario, 'wanda', wandaMessageId, wandaMessage, responseData.meltdownLevel));
  store.dispatch(setInput(responseData.scenario, responseData.type, responseData.user));
};

const timezone = () => {
  const timezone = jstz.determine();
  
  return timezone.name();
};

const typingDelay = messageText => {
  console.log('Typing delay', timeToBeginTyping + (striptags(messageText).length * 50));
  const delayTime = timeToBeginTyping + (striptags(messageText).length * 30);
  
  return delayTime > minTypingTime ? delayTime : minTypingTime;
};

export const respond = async (scenario, messageId, message, requiresResponse = true) => {
  console.log('Trying to send user response');
  
  const sendData = {
    session: sessionId,
    scenario: scenario,
    user: messageId,
    message: message,
    requiresResponse: requiresResponse
  };
  
  console.log('Send data', sendData);
  
  try {
    const response = await axios.post('/api/respond', sendData);
    
    if (response.data.error) {
      console.log(`An error occured getting Wanda's response: ${response.data.error}`);
      showError(response.data.error);
    } else {
      console.log('Message response:', response.data);
      
      if (response.data.wanda) {
        const wandaMessageId = Object.keys(response.data.wanda)[0];
        const wandaMessage = response.data.wanda[wandaMessageId];

        if (response.data.emotion) {
          store.dispatch(setEmotion(response.data.emotion));
        }
        
        store.dispatch(setMeltdownLevel(response.data.meltdownLevel ? response.data.meltdownLevel : 0));
        
        if (response.data.identity) {
          store.dispatch(setIdentity(response.data.identity));
        }
        
        setTimeout(store.dispatch, timeToBeginTyping, setTyping(true));
        setTimeout(showResponse, typingDelay(wandaMessage), response.data, wandaMessageId, wandaMessage);
      }
    }
  } catch(error) {
    console.log(`An error occured getting Wanda's response back from the server: ${error}`);
    showError("Sorry! I couldn't connect to Wanda HQ - it could be your internet connection");
  }
};

export const getHistory = async () => {
  console.log('Trying to get user chat history');
  
  try {
    const response = await axios.get('/api/history');
    
    if (response.data.error || !response.data.length) {
      console.log(`An error occured getting user's chat history back from the server: ${response.data.error}`);
      showError(response.data.error);
    } else {
      let chatHistory = response.data;
      console.log('User chat history:', chatHistory);
      
      const startScenario = document.head.querySelector('meta[name="start-scenario"]').content;
      const startMessage = document.head.querySelector('meta[name="start-message"]').content;
      
      if (chatHistory.length) {
        for (let chatEntry of chatHistory) {
          store.dispatch(addMessage(chatEntry.time * 1000, chatEntry.scenario, chatEntry.sender, chatEntry.id, chatEntry.message));
        }

        const latestChatEntry = chatHistory.slice(-1)[0];
        console.log('Latest chat entry:', latestChatEntry);
        store.dispatch(setInput(latestChatEntry.scenario, latestChatEntry.type, latestChatEntry.userInput, latestChatEntry.meltdownLevel));
        store.dispatch(setMeltdownLevel(latestChatEntry.meltdownLevel ? latestChatEntry.meltdownLevel : 0));
        store.dispatch(setIdentity(latestChatEntry.identity));
        store.dispatch(setTyping(false));
        
        if (startScenario && startMessage) {
          respond(startScenario, startMessage, '');
        }
        
        checkMessagesDisplayedTimer = setInterval(checkMessagesDisplayed, 500, getWandaMessagesCount(chatHistory));
      } else {
        respond(startScenario, startMessage, timezone());
        hideLoading();
      }
    }
  } catch(error) {
    console.log(`An error occured getting user's chat history back from the server: ${error}`);
    showError("Sorry! I couldn't connect to Wanda HQ - it could be your internet connection");
  }
};

export const getSessionId = () => {
  return sessionId;
};

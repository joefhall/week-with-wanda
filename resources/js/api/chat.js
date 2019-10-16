import axios from 'axios';
import jstz from 'jstz';
import striptags from 'striptags';
import uuidv4 from 'uuid/v4';

import { sendGoogleAnalyticsEvent } from './analytics';
import { addMessage, setEmotion, setIdentity, setInput, setMeltdownLevel, setLoading, setTyping } from '../actions';
import store from '../store';

let checkMessagesDisplayedTimer;
const minTypingTime = 1000;
const sessionId = uuidv4();
const timeToBeginTyping = 250;
window.navigationOccurred = false;

window.addEventListener('beforeunload', (event) => {
  window.navigationOccurred = true;
});

window.addEventListener('pagehide', (event) => {
  window.navigationOccurred = true;
});

const checkMessagesDisplayed = wandaMessagesCount => {
  const wandaMessagesBubbles = document.querySelectorAll('.chat__messages__message__bubble--wanda');
  const aiViews = document.querySelector('.chat__ai-views');
  
  if ((wandaMessagesBubbles && wandaMessagesBubbles.length >= wandaMessagesCount) || aiViews) {
    clearInterval(checkMessagesDisplayedTimer);
    hideLoading();
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

const latestEmotion = chatHistory => {
  chatHistory.reverse();
  
  const latestMessageWithEmotion = chatHistory.find(message => {
    return message.hasOwnProperty('emotion') && message.emotion;
  });
  
  return latestMessageWithEmotion === undefined ? 'base' : latestMessageWithEmotion.emotion;
};

const showError = errorMessage => {
  const errorMessageDisplayed = document.querySelector('.chat__messages__message__error');

  if (!errorMessageDisplayed && !window.navigationOccurred) {
    const emoji = '💩';
    const message = `<div class='chat__messages__message__error'>${errorMessage}. <strong>Try hitting refresh</strong> (or if this continues email my maker <a href='mailto:weekwithwanda@gmail.com'>weekwithwanda@gmail.com</a>)</div>`;
    const emotion = 'thumbs-down';

    store.dispatch(setEmotion(emotion));

    showResponse({
      emotion: emotion,
      meltdownLevel: 10,
      scenario: '',
      type: 'error',
      user: {none: null},
      wanda: {errorEmoji: emoji}
    }, 'errorEmoji', emoji);

    showResponse({
      emotion: null,
      meltdownLevel: 10,
      scenario: '',
      type: 'error',
      user: {none: null},
      wanda: {error: message}
    }, 'error', message);
  }
};

const showResponse = (responseData, wandaMessageId, wandaMessage) => {
  store.dispatch(setTyping(false));
  store.dispatch(addMessage(Date.now(), responseData.scenario, 'wanda', wandaMessageId, wandaMessage, responseData.emotion, responseData.meltdownLevel));
  store.dispatch(setInput(responseData.scenario, responseData.type, responseData.user));
};

export const timezone = () => {
  const timezone = jstz.determine();
  
  return timezone.name();
};

const typingDelay = messageText => {
  const delayTime = timeToBeginTyping + (striptags(messageText).length * 30);
  
  return delayTime > minTypingTime ? delayTime : minTypingTime;
};

export const respond = async (scenario, messageId, message, requiresResponse = true) => {
  const sendData = {
    session: sessionId,
    scenario: scenario,
    user: messageId,
    message: message,
    requiresResponse: requiresResponse
  };

  sendGoogleAnalyticsEvent(scenario, 'user', messageId, message);

  try {
    const response = await axios.post('/api/respond', sendData);
    
    if (response.data.error) {
      console.log(`An error occured getting Wanda's response: ${response.data.error}`);
      showError(response.data.error);
    } else {
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

        sendGoogleAnalyticsEvent(response.data.scenario, 'wanda', wandaMessageId, wandaMessage);
      }
    }
  } catch(error) {
    console.log(`An error occured getting Wanda's response back from the server: ${error}`);
    showError("Sorry! I couldn't connect - it could be your internet");
  }
};

export const getHistory = async () => {
  try {
    const response = await axios.get('/api/history');
    
    if (response.data.error || !response.data.length) {
      console.log(`An error occured getting user's chat history back from the server: ${response.data.error}`);
      showError(response.data.error);
    } else {
      let chatHistory = response.data;
      
      const startScenario = document.head.querySelector('meta[name="start-scenario"]').content;
      const startMessage = document.head.querySelector('meta[name="start-message"]').content;
      
      if (chatHistory.length) {
        let addMessages = [];
        for (let chatEntry of chatHistory) {
          addMessages.push(addMessage(chatEntry.time * 1000, chatEntry.scenario, chatEntry.sender, chatEntry.id, chatEntry.message, chatEntry.hasOwnProperty('emotion') ? chatEntry.emotion : null));
        }
        store.dispatch(addMessages);

        const latestChatEntry = chatHistory.slice(-1)[0];
        const penultimateChatEntry = chatHistory.slice(-2)[0];
        const latestWandaChatEntry = latestChatEntry.sender === 'wanda' ? latestChatEntry : penultimateChatEntry;
        
        store.dispatch(setInput(latestWandaChatEntry.scenario, latestWandaChatEntry.type, latestWandaChatEntry.userInput, latestWandaChatEntry.meltdownLevel));
        store.dispatch(setEmotion(latestEmotion(chatHistory)));
        store.dispatch(setMeltdownLevel(latestWandaChatEntry.meltdownLevel));
        store.dispatch(setIdentity(latestWandaChatEntry.identity));
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
    showError("Sorry! I couldn't connect - it could be your internet");
  }
};

export const getSessionId = () => {
  return sessionId;
};

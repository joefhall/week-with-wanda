import axios from 'axios';
import { addMessage } from '../actions';
import { setInput, setLoading, setTyping } from '../actions';
import store from '../store';
import striptags from 'striptags';
import uuidv4 from 'uuid/v4';

let checkMessagesDisplayedTimer;
const sessionId = uuidv4();
const timeToBeginTyping = 500;

const checkMessagesDisplayed = wandaMessagesCount => {
  const wandaMessagesBubbles = document.querySelectorAll('.chat__messages__message__bubble--wanda');
  
  if (wandaMessagesBubbles && wandaMessagesBubbles.length >= wandaMessagesCount) {
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
  document.querySelector('.chat__messages').classList.remove('invisible', 'h-0');
  document.querySelector('.chat__input__container').classList.remove('invisible');
  document.querySelector('.chat__loading').classList.add('d-none');
};

const showResponse = (responseData, wandaMessageId, wandaMessage) => {
  store.dispatch(setTyping(false));
  store.dispatch(addMessage(Date.now(), responseData.scenario, 'wanda', wandaMessageId, wandaMessage));
  store.dispatch(setInput(responseData.scenario, responseData.type, responseData.user));
};

const typingDelay = messageText => {
  console.log('Typing delay', timeToBeginTyping + (striptags(messageText).length * 50));
  return timeToBeginTyping + (striptags(messageText).length * 50);
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
      console.log(`An error occured getting Wanda's response back from the server: ${response.data.error}`);
    } else {
      console.log('Message response:', response.data);
      
      if (response.data.wanda) {
        const wandaMessageId = Object.keys(response.data.wanda)[0];
        const wandaMessage = response.data.wanda[wandaMessageId];

        setTimeout(store.dispatch, timeToBeginTyping, setTyping(true));
        setTimeout(showResponse, typingDelay(wandaMessage), response.data, wandaMessageId, wandaMessage);
      }
    }
  } catch(error) {
    console.log(`An error occured getting Wanda's response back from the server: ${error}`);
  }
};

export const getHistory = async () => {
  console.log('Trying to get user chat history');
  
  try {
    const response = await axios.get('/api/history');
    
    if (response.data.error) {
      console.log(`An error occured getting user's chat history back from the server: ${response.data.error}`);
    } else {
      let chatHistory = response.data;
      console.log('User chat history:', chatHistory);
      
      if (chatHistory.length) {
        for (let chatEntry of chatHistory) {
          store.dispatch(addMessage(chatEntry.time * 1000, chatEntry.scenario, chatEntry.sender, chatEntry.id, chatEntry.message));
        }

        const latestChatEntry = chatHistory.slice(-1)[0];
        console.log('Latest chat entry:', latestChatEntry);
        store.dispatch(setInput(latestChatEntry.scenario, latestChatEntry.type, latestChatEntry.userInput));
        
        const startScenario = document.head.querySelector('meta[name="start-scenario"]').content;
        const startMessage = document.head.querySelector('meta[name="start-message"]').content;
        if (startScenario && startMessage) {
          respond(startScenario, startMessage, '');
        }
        
        checkMessagesDisplayedTimer = setInterval(checkMessagesDisplayed, 500, getWandaMessagesCount(chatHistory));
      } else {
        respond('welcomeSignup', 'begin', '');
        hideLoading();
      }
    }
  } catch(error) {
    console.log(`An error occured getting user's chat history back from the server: ${error}`);
  }
};

export const getSessionId = () => {
  return sessionId;
};

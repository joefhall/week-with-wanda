import axios from 'axios';
import { addMessage } from '../actions';
import { setInput, setTyping } from '../actions';
import store from '../store';

const typingDelay = messageText => {
  return messageText.length * 100;
}

const showResponse = (responseData, wandaMessageId, wandaMessage) => {
  store.dispatch(setTyping(false));
  store.dispatch(addMessage(Date.now(), responseData.scenario, 'wanda', wandaMessageId, wandaMessage));
  store.dispatch(setInput(responseData.scenario, responseData.type, responseData.user));
}

export const respond = async (scenario, messageId, message) => {
  console.log('Trying to send user response');
  
  const sendData = {
    scenario: scenario,
    user: messageId,
    message: message
  };
  
  console.log('Send data', sendData);
  
  try {
    const response = await axios.post('/api/respond', sendData);
    
    if (response.data.error) {
      console.log(`An error occured getting Wanda's response back from the server: ${response.data.error}`);
    } else {
      console.log('Message response:', response.data);
      
      store.dispatch(setTyping(true));
      
      const wandaMessageId = Object.keys(response.data.wanda)[0];
      const wandaMessage = response.data.wanda[wandaMessageId];
      setTimeout(showResponse, typingDelay(wandaMessage), response.data, wandaMessageId, wandaMessage);
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
      
      // TODO: do something different if chat history empty - assume is new user
      
      if (chatHistory.length) {
        for (let chatEntry of chatHistory) {
          store.dispatch(addMessage(chatEntry.time * 1000, chatEntry.scenario, chatEntry.sender, chatEntry.id, chatEntry.message));
        }

        const latestChatEntry = chatHistory.slice(-1)[0];
        console.log('Latest chat entry:', latestChatEntry);
        store.dispatch(setInput(latestChatEntry.scenario, latestChatEntry.type, latestChatEntry.userInput));
      } else {
        respond('welcome', 'begin', '');
      }
    }
  } catch(error) {
    console.log(`An error occured getting user's chat history back from the server: ${error}`);
  }
};

import axios from 'axios';
import { addMessage } from '../actions';
import { setInput } from '../actions';
import store from '../store';

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
      const wandaMessageId = Object.keys(response.data.wanda)[0];
      store.dispatch(addMessage(Date.now(), response.data.scenario, 'wanda', wandaMessageId, response.data.wanda[wandaMessageId]));
      store.dispatch(setInput(response.data.scenario, response.data.type, response.data.user));
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

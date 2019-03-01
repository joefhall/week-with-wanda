import axios from 'axios';
import { addMessage } from '../actions';
import { setInput } from '../actions';
import store from '../store';

export const respond = async (scenario, messageId, message) => {
  console.log('Trying to send user response');
  
  const sendData = {
    scenario: scenario,
    user: messageId
  };
  
  try {
    const response = await axios.post('/api/respond', sendData);
    
    if (response.data.error) {
      console.log(`An error occured getting data back from the server: ${response.data.error}`);
    } else {
      console.log(response.data);
      const wandaMessageId = Object.keys(response.data.wanda)[0];
      store.dispatch(addMessage(response.data.scenario, 'wanda', wandaMessageId, response.data.wanda[wandaMessageId]));
      store.dispatch(setInput(response.data.scenario, response.data.type, response.data.user));
    }
  } catch(error) {
    console.log(`An error occured getting data back from the server: ${error}`);
  }
};

import axios from 'axios';
import { addMessage } from '../actions';
import store from '../store';

export const respond = async (message) => {
  console.log('Trying to send user response');
  
  const sendData = {
    scenario: 'welcome',
    wanda: 'hello',
    user: message
  };
  
  try {
    const response = await axios.post('/api/respond', sendData);
    
    if (response.data.error) {
      console.log(`An error occured! ${response.data.error}`);
    } else {
      console.log(response.data);
      store.dispatch(addMessage(response.data.wanda, 'wanda'));
    }
  } catch(error) {
    console.log(`An error occured! ${error}`);
  }
};

import axios from 'axios';
import { addMessage } from '../actions';
import store from '../store';

const api = axios.create({
  baseURL: '/botman',
  headers: {
//     Authorization: 'Client-ID '
  }
});

export const sendMessage = async (text, interactive = false) => {
  console.log('Sending message');
  console.log(this);

  const data = {
    driver: 'web',
    userId: 12345,
    message: text,
    attachment: null,
    interactive: interactive ? '1' : '0'
  };

  console.log(data);

  const response = await api.post('', data);

  console.log(response.data);
  
  const messages = response.data.messages || [];
  if (messages.length) {
    store.dispatch(addMessage(messages[0].text, 'wanda'));
  }
};

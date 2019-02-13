import React from 'react';
import botman from '../api/botman';
import Chat from './Chat';

export default class App extends React.Component {
  state = {};

  sendMessage = (text, interactive = false) => {
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

    botman.post('', data).then(response => {
      const messages = response.data.messages || [];
      console.log(response.data);
    });
  }
  
  render() {
    return (
      <Chat />
    );
  }
}

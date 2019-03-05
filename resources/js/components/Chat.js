import React from 'react';
import ChatInput from './ChatInput';
import ChatMessages from './ChatMessages';

export default class Chat extends React.Component {
  state = {};
  
  render() {
    return (
      <div className="chat">
        <ChatMessages />
        <ChatInput />
      </div>
    );
  }
};

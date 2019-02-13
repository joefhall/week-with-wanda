import React from 'react';
import ChatMessages from './ChatMessages';
import ChatInput from './ChatInput';

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

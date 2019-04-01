import React from 'react';
import ChatInput from './ChatInput';
import ChatLoading from './ChatLoading';
import ChatMessages from './ChatMessages';

export default class Chat extends React.Component {
  state = {};
  
  render() {
    return (
      <div className="chat">
        <ChatLoading />
        <ChatMessages />
        <ChatInput />
      </div>
    );
  }
};

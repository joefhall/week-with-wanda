import React from 'react';
import Div100vh from 'react-div-100vh';

import ChatInput from './ChatInput';
import ChatLoading from './ChatLoading';
import ChatMessages from './ChatMessages';
import ChatWanda from './ChatWanda';

export default class Chat extends React.Component {
  state = {};
  
  render() {
    return (
      <Div100vh>
        <div className="chat">
          <ChatWanda />
          <ChatLoading />
          <ChatMessages />
          <ChatInput />
        </div>
      </Div100vh>
    );
  }
};

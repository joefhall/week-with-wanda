import React from 'react';
import { connect } from 'react-redux';
import Div100vh from 'react-div-100vh';

import ChatAiViews from './ChatAiViews';
import ChatInput from './ChatInput';
import ChatLoading from './ChatLoading';
import ChatMessages from './ChatMessages';
import ChatWanda from './ChatWanda';

class Chat extends React.Component {
  state = {};

  renderMainPane() {
    if (this.props.input && this.props.input.type === 'aiViews') {
      return (
        <ChatAiViews />
      );
    } else {
      return (
        <ChatMessages />
      );
    }
  }
  
  render() {
    return (
      <Div100vh>
        <div className="chat">
          <ChatWanda />
          <ChatLoading />
          { this.renderMainPane() }
          <ChatInput />
        </div>
      </Div100vh>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input
  };
};

export default connect(mapStateToProps, {})(Chat);

import React from 'react';
import { connect } from 'react-redux';
import { addMessage, setInput, setUserProperty } from '../actions';
import { getHistory, respond } from '../api/chat';
import store from '../store';
import ChatInputPasswordCreate from './ChatInputPasswordCreate';
import ChatInputText from './ChatInputText';
import ChatMessages from './ChatMessages';
import LoginHidden from './LoginHidden';
import { toTitleCase } from '../utils/text';

class ChatInput extends React.Component {
  addAndSendMessage = (messageId, message) => {
    store.dispatch(addMessage(Date.now(), this.props.input.scenario, 'user', messageId, message));
    respond(this.props.input.scenario, messageId, message);
  };

  receiveTextInput = inputText => {
    console.log('Input type', this.props.input.type);
    switch(this.props.input.type) {
      case 'signupEmail':
        store.dispatch(setUserProperty('email', inputText));
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
      case 'signupName':
        inputText = toTitleCase(inputText);
        store.dispatch(setUserProperty('name', inputText));
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
      case 'signupPassword':
        const messageId = Object.keys(this.props.input.userInput)[0];        
        store.dispatch(setUserProperty('password', inputText));
        store.dispatch(addMessage(Date.now(), this.props.input.scenario, 'user', messageId, '*'.repeat(inputText.length)));
        respond(this.props.input.scenario, messageId, inputText);
        break;
    }
  }

  componentDidMount() {
    getHistory();
  }

  componentDidUpdate() {
    document.querySelector('.chat__messages__bottom').scrollIntoView({ behavior: 'smooth' });
    
    if (this.props.input && this.props.input.type && this.props.input.type === 'none' && this.props.input.userInput) {
      this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
    }
  }

  renderInputChoices() {
    const userInput = this.props.input.userInput;

    return Object.keys(userInput).map((inputId) => {
      return (
        <div className="chat__input__choices__choice" key={inputId} onClick={() => this.addAndSendMessage(inputId, userInput[inputId])}>
          {userInput[inputId]}
        </div>
      );
    });
  }

  renderInput() {
    console.log('Render input:', this.props.input);
    
    if (this.props.input && this.props.input.type) {
      switch(this.props.input.type) {
        case 'choice':
          if (this.props.input.userInput) {
            return (
              <div className="chat__input__choices">
                { this.renderInputChoices() }
              </div>
            );
          }
          break;
          
        case 'doLogin':
          return (
            <LoginHidden followUpAction={this.addAndSendMessage} />
          );
          break;

        case 'signupEmail':
          return (
            <ChatInputText placeholder="Your email" onFormSubmit={this.receiveTextInput} />
          );
          break;
        
        case 'signupName':
          return (
            <ChatInputText placeholder="Your first name" onFormSubmit={this.receiveTextInput} />
          );
          break;
          
        case 'signupPassword':
          return (
            <ChatInputPasswordCreate onFormSubmit={this.receiveTextInput} />
          );
          break;
          
        case 'text':
          return (
            <ChatInputText placeholder="" onFormSubmit={this.receiveTextInput} />
          );
          break;

        case 'none':
          break;
      }
    }
  }
  
  render() {
    return (
      <div className="chat__input">
        { this.renderInput() }
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input,
    message: state.message
  };
};

export default connect(mapStateToProps, { addMessage, setInput })(ChatInput);

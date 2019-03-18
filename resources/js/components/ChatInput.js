import React from 'react';
import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';
import { connect } from 'react-redux';

import { addMessage, setInput, setUserProperty } from '../actions';
import { getHistory, getSessionId, respond } from '../api/chat';
import ChatInputPasswordCreate from './ChatInputPasswordCreate';
import ChatInputPhone from './ChatInputPhone';
import ChatInputText from './ChatInputText';
import ChatMessages from './ChatMessages';
import LoginFacebook from './LoginFacebook';
import LoginHidden from './LoginHidden';
import store from '../store';
import { toTitleCase } from '../utils/text';

class ChatInput extends React.Component {
  addAndSendMessage = (messageId, message) => {
    store.dispatch(addMessage(Date.now(), this.props.input.scenario, 'user', messageId, message));
    respond(this.props.input.scenario, messageId, message);
  };

  receiveTextInput = inputText => {
    console.log('Input type', this.props.input.type);
    switch(this.props.input.type) {
      case 'choiceAndText':
        const userInputKeys = Object.keys(this.props.input.userInput); 
        this.addAndSendMessage(userInputKeys[userInputKeys.length -1], inputText);
        break;
        
      case 'signupEmail':
        store.dispatch(setUserProperty('email', inputText));
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
        
      case 'signupMobileNumber':
        store.dispatch(setUserProperty('mobileNumber', inputText));
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
        
      case 'textAndChoice':
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
    }
  }

  componentDidMount() {
    this.setState({ sessionId: getSessionId() });
    getHistory();
  }

  componentDidUpdate() {
    document.querySelector('.chat__messages__bottom').scrollIntoView({ behavior: 'smooth' });
    
    if (this.props.input && this.props.input.type) {
      if (this.props.input.type === 'none' && this.props.input.userInput) {
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
      }
      if (this.props.input.type === 'doLoginFacebook' && this.props.input.userInput && document.head.querySelector('meta[name="logged-in"]').content === 'true') {
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
      }
    }
  }

  renderInputChoices(userInput) {
    return Object.keys(userInput).map((inputId) => {
      return (
        <div className="chat__input__choices__choice" key={inputId} onClick={() => this.addAndSendMessage(inputId, userInput[inputId])}>
          {ReactHtmlParser(userInput[inputId])}
        </div>
      );
    });
  }

  renderInput() {
    console.log('Render input:', this.props.input);
    
    if (this.props.input && this.props.input.type) {
      switch(this.props.input.type) {
        case 'choice':
          return (
            <div className="chat__input__choices">
              { this.renderInputChoices(this.props.input.userInput) }
            </div>
          );
          break;
          
        case 'doLogin':
          return (
            <LoginHidden followUpAction={this.addAndSendMessage} />
          );
          break;
          
        case 'signupChoice':
          const messageText = 'Sign up with Facebook (quickest)';
          
          return (
            <div className="chat__input__choices">
              <a className="chat__input__choices__choice" href={'/login/facebook?state=' + this.state.sessionId} key="signupFacebook" onClick={() => this.addAndSendMessage('signupFacebook', messageText)}>
                {messageText}
              </a>
              { this.renderInputChoices(this.props.input.userInput) }
            </div>
          );
          break;

        case 'signupEmail':
          return (
            <ChatInputText name="email" placeholder="Your email" onFormSubmit={this.receiveTextInput} />
          );
          break;
          
        case 'signupMobileNumber':
          return (
            <ChatInputPhone onFormSubmit={this.receiveTextInput} />
          );
          break;
        
        case 'signupName':
          return (
            <ChatInputText minLength={2} name="first_name" placeholder="Your first name" onFormSubmit={this.receiveTextInput} />
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
          
        case 'textAndChoice':
          let userInputFiltered = Object.assign({}, this.props.input.userInput);
          delete userInputFiltered[Object.keys(userInputFiltered)[0]];
          console.log('User input filtered', userInputFiltered);
          
          return (
            <div>
              <ChatInputText minLength={7} placeholder="Enter the code I sent you" onFormSubmit={this.receiveTextInput} />
              <div className="chat__input__choices">
                { this.renderInputChoices(userInputFiltered) }
              </div>
            </div>
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

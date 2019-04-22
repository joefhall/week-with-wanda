import React from 'react';
import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';
import { connect } from 'react-redux';

import { addMessage, setEmotion, setInput, setUserProperty } from '../actions';
import { getHistory, getSessionId, respond } from '../api/chat';
import ChatInputChoices from './ChatInputChoices';
import ChatInputPassword from './ChatInputPassword';
import ChatInputPasswordCreate from './ChatInputPasswordCreate';
import ChatInputPhone from './ChatInputPhone';
import ChatInputText from './ChatInputText';
import ChatMessages from './ChatMessages';
import LoginHidden from './LoginHidden';
import store from '../store';
import { toTitleCase } from '../utils/text';

class ChatInput extends React.Component {
  addAndSendMessage = (messageId, message, scenario = this.props.input.scenario, requiresResponse = true) => {
    store.dispatch(addMessage(Date.now(), scenario, 'user', messageId, message));
    respond(scenario, messageId, message, requiresResponse);
  };

  showLoading = () => {
    document.querySelector('.chat__messages').classList.add('invisible', 'h-0');
    document.querySelector('.chat__input').classList.add('d-none');
    document.querySelector('.chat__loading').classList.remove('d-none');
  };

  receiveTextInput = inputText => {
    console.log('Input type', this.props.input.type);
    
    let messageId;
    
    switch(this.props.input.type) {
      case 'choiceAndText':
        const userInputKeys = Object.keys(this.props.input.userInput); 
        this.addAndSendMessage(userInputKeys[userInputKeys.length -1], inputText);
        break;
        
      case 'loginEmail':
        store.dispatch(setUserProperty('email', inputText));
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
        
      case 'loginPassword':
        messageId = Object.keys(this.props.input.userInput)[0];        
        store.dispatch(setUserProperty('password', inputText));
        store.dispatch(addMessage(Date.now(), this.props.input.scenario, 'user', messageId, '*'.repeat(inputText.length)));
        respond(this.props.input.scenario, messageId, inputText);
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
        messageId = Object.keys(this.props.input.userInput)[0];        
        store.dispatch(setUserProperty('password', inputText));
        store.dispatch(addMessage(Date.now(), this.props.input.scenario, 'user', messageId, '*'.repeat(inputText.length)));
        respond(this.props.input.scenario, messageId, inputText);
        break;
        
      case 'text':
      case 'textAndChoice':
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], inputText);
        break;
    }
  }

  componentDidMount() {
    this.setState({ sessionId: getSessionId() });
    this.showLoading();
    getHistory();
  }

  componentDidUpdate() {
    const chatMessagesBottom = document.querySelector('.chat__messages__bottom');
    if (chatMessagesBottom) {
      chatMessagesBottom.scrollIntoView({ behavior: 'smooth' });
    }
    
    if (this.props.input && this.props.input.type) {
      if (this.props.input.type === 'none' && this.props.input.userInput) {
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
      }
      if (this.props.input.type === 'doLoginFacebook' && this.props.input.userInput) {
        this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
      }
    }
  }

  renderInput() {
    console.log('Render input:', this.props.input);
    
    if (this.props.input && this.props.input.type) {
      let userInputFiltered;
      
      switch(this.props.input.type) {
        case 'choice':
          return (
            <ChatInputChoices onClick={this.addAndSendMessage} userInput={this.props.input.userInput} />
          );
          break;
          
        case 'choiceAndText':
          userInputFiltered = Object.assign({}, this.props.input.userInput);
          delete userInputFiltered[Object.keys(userInputFiltered)[Object.keys(userInputFiltered).length - 1]];
          
          return (
            <div>
              <ChatInputChoices onClick={this.addAndSendMessage} userInput={userInputFiltered} />
              <ChatInputText minLength={5} placeholder="Other" onFormSubmit={this.receiveTextInput} />
            </div>
          );
          break;
          
        case 'choiceMulti':
          return (
            <ChatInputChoices onFormSubmit={this.addAndSendMessage} scenario={this.props.input.scenario} sessionId={this.state.sessionId} type={this.props.input.type} userInput={this.props.input.userInput} />
          );
          break;
          
        case 'doLogin':
          return (
            <LoginHidden followUpAction={this.addAndSendMessage} />
          );
          break;
          
        case 'loginEmail':
          return (
            <ChatInputText name="email" placeholder="Your email" onFormSubmit={this.receiveTextInput} />
          );
          break;
          
        case 'loginPassword':
          return (
            <ChatInputPassword onFormSubmit={this.receiveTextInput} />
          );
          break;
        
        case 'loginChoice':
        case 'signupChoice':
          return (
            <ChatInputChoices onClick={this.addAndSendMessage} sessionId={this.state.sessionId} type={this.props.input.type} userInput={this.props.input.userInput} />
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
          userInputFiltered = Object.assign({}, this.props.input.userInput);
          delete userInputFiltered[Object.keys(userInputFiltered)[0]];
          
          const textPlaceholder = Object.keys(userInputFiltered)[0].includes('MobileNumber') ? 'Enter the code I sent you' : 'Type here';
          
          return (
            <div>
              <ChatInputText minLength={7} placeholder={textPlaceholder} onFormSubmit={this.receiveTextInput} />
              <ChatInputChoices onClick={this.addAndSendMessage} userInput={userInputFiltered} />
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
        <div  className="chat__input__container">
          { this.renderInput() }
        </div>
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

import React from 'react';
import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';

export default class ChatInputChoices extends React.Component {  
  state = { 
    errorMessage: (this.props.type && this.props.type === 'choiceMulti') ? 'Please choose one or more' : '',
    hasError: false,
    inputText: ''
  };

  validate = () => { 
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (this.props.type && this.props.type === 'choiceMulti') {
      const selectedChoices = document.querySelectorAll('.chat__input__choices__choice--selected');
      
      if (!selectedChoices.length) {
        this.setState({
          errorMessage: 'Please choose one or more',
          hasError: true
        });
      }
    }
  };

  onClick = (inputId, userInputSelected) => {
    if (this.props.type && this.props.type === 'choiceMulti') {
      const choiceDiv = document.querySelector('#' + inputId);
      const classSelected = 'chat__input__choices__choice--selected'
      const classUnselected = 'chat__input__choices__choice--unselected';
      
      if (choiceDiv.classList.contains(classUnselected)) {
        choiceDiv.classList.remove(classUnselected);
        choiceDiv.classList.add(classSelected);
      } else {
        choiceDiv.classList.remove(classSelected);
        choiceDiv.classList.add(classUnselected);
      }
    }
    
    this.validate();
    
    if (this.props.onClick) {
      this.props.onClick(inputId, userInputSelected);
    }
  };

  onFormSubmit = () => {
    this.validate();
    
    if (!this.state.errorMessage) {
      const selectedChoices = document.querySelectorAll('.chat__input__choices__choice--selected');
      let count = 1;
      for (const selectedChoice of selectedChoices) {
        setTimeout(this.props.onFormSubmit, count * 500, selectedChoice.id, selectedChoice.innerText, this.props.scenario, count === selectedChoices.length);
        count++;
      }
    }
  };

  renderBefore() {
    switch(this.props.type) {
      case 'loginChoice':
      case 'signupChoice':
        const messageText = (this.props.type === 'loginChoice') ? 'Log in with Facebook' : 'Sign up using Facebook (quickest)';
        return (
          <a className="chat__input__choices__choice" href={'/login/facebook?state=' + this.props.sessionId} key="signupFacebook" onClick={() => this.onClick('signupFacebook', messageText)}>
            {messageText}
          </a>
        );
        break;
    }
  }

  renderButton() {
    if (this.props.type && this.props.type === 'choiceMulti') {
      return (
        <i className="chevron circle right icon chat__input__form__submit-button" onClick={this.onFormSubmit}></i>
      );
    }
  }

  renderChoices(userInput) {
    const choiceMulti = (this.props.type && this.props.type === 'choiceMulti');
    
    return Object.keys(userInput).map((inputId) => {
      return (
        <div className={'chat__input__choices__choice' + (choiceMulti ? ' chat__input__choices__choice--unselected' : '')} key={inputId} id={inputId} onClick={() => this.onClick(inputId, userInput[inputId])}>
          {ReactHtmlParser(userInput[inputId])}
        </div>
      );
    });
  }

  render() {
    return (
      <div>
        <div className={(this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <div className="chat__input__form">
          <div className="chat__input__choices">
            { this.renderBefore() }
            { this.renderChoices(this.props.userInput) }
          </div>
          { this.renderButton() }
        </div>
      </div>
    );
  }
};

import React from 'react';
import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';

export default class ChatInputChoices extends React.Component {
  state = { 
    errorMessage: '',
    hasError: false,
    inputText: ''
  };

  validate = () => {
    const input = document.querySelectorAll('.chat__input__form__input')[0];
    
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (this.props.minLength && input.value.length < this.props.minLength) {
      this.setState({
        errorMessage: `Please enter at least ${this.props.minLength} characters`,
        hasError: true
      });
    }
  };

  onChange = event => {
    this.setState({inputText: event.target.value});
    if (this.props.onChange) {
      this.props.onChange(event);
    }
    
    this.validate();
  };

  onClick = (inputId, userInputSelected) => {
    this.props.onClick(inputId, userInputSelected);
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.validate();
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.inputText);
    }
  };
  
  componentDidMount() {
    
  }

  renderBefore() {
    switch(this.props.type) {
      case 'signupChoice':
        const messageText = 'Sign up with Facebook (quickest)';
        return (
          <a className="chat__input__choices__choice" href={'/login/facebook?state=' + this.props.sessionId} key="signupFacebook" onClick={() => this.onClick('signupFacebook', messageText)}>
            {messageText}
          </a>
        );
        break;
    }
  }

  renderChoices(userInput) {
    return Object.keys(userInput).map((inputId) => {
      return (
        <div className="chat__input__choices__choice" key={inputId} onClick={() => this.onClick(inputId, userInput[inputId])}>
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
        <div className="chat__input__choices">
          { this.renderBefore() }
          { this.renderChoices(this.props.userInput) }
        </div>
      </div>
    );
  }
};

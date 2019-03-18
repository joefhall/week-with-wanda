import React from 'react';
import { connect } from 'react-redux';
import ChatInputText from './ChatInputText';

class ChatInputPasswordCreate extends React.Component {
  state = { 
    errorMessage: 'Enter a password',
    hasError: false,
    inputText: ''
  };

  validatePasswords = () => {
    const passwordInputs = document.querySelectorAll('input.chat__input__form__input[type="password"]');
    
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (!passwordInputs[0].value || passwordInputs[0].value.length < 5) {
      this.setState({
        errorMessage: 'Enter a password',
        hasError: false
      });
    } else if (passwordInputs[0].value.length >= 5 && !passwordInputs[1].value) {
      this.setState({
        errorMessage: 'Please confirm your password',
        hasError: false
      });
    } else if (passwordInputs[0].value !== passwordInputs[1].value) {
      this.setState({
        errorMessage: 'Please make sure the passwords match',
        hasError: true
      });
    }
  };

  onChange = event => {
    this.setState({inputText: event.target.value});
    this.validatePasswords();
  };

  onFormSubmit = event => {
    this.validatePasswords();
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.inputText);
    }
  };

  render() {
    return (
      <div>
        <div className={(this.state.errorMessage ? '' : 'd-none ') + (this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <ChatInputText hideButton="true" placeholder="Password" type="password" onChange={this.onChange} onFocus={this.onChange} onFormSubmit={this.onFormSubmit} />
        <ChatInputText placeholder="Confirm password" type="password" onChange={this.onChange} onFocus={this.onChange} onFormSubmit={this.onFormSubmit} />
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    user: state.user
  };
};

export default connect(mapStateToProps, {})(ChatInputPasswordCreate);

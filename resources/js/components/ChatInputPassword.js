import React from 'react';
import { connect } from 'react-redux';

class ChatInputPassword extends React.Component {
  state = { 
    errorMessage: 'Enter your password',
    hasError: false,
    password: '',
    resetPasswordText: 'I\'ve forgotten my password – email me to reset it'
  };

  validatePassword = () => {
    const passwordInput = document.querySelector('input.chat__input__form__input[type="password"]');
    
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (!passwordInput.value) {
      this.setState({
        hasError: false
      });
    }
  };

  onBlur = event => {
    if (this.props.onBlur) {
      this.props.onBlur(event);
    }
  };

  onChange = event => {
    const passwordInput = document.querySelector('input.chat__input__form__input[type="password"]');
    this.setState({
      password: passwordInput.value
    });
    
    this.validatePassword();
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.validatePassword();
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.password);
    }
  };

  resetPassword = () => {
    this.props.resetPassword('sendPasswordReset', this.state.resetPasswordText);
  };

  componentWillUnmount() {
    if (this.props.onBlur) {
      this.props.onBlur();
    }
  }

  render() {
    return (
      <form onSubmit={this.onFormSubmit}>
        <div className="chat__input__form">
          <input className="chat__input__form__input" name="password" type="password" placeholder="Password" value={this.state.password} onBlur={this.onBlur} onChange={this.onChange} onFocus={this.onFocus} />
          <i className="chevron circle right icon chat__input__form__submit-button" onClick={this.onFormSubmit}></i>
        </div>
        <div className="chat__input__form__forgotten-password">
          <span onClick={this.resetPassword}>{this.state.resetPasswordText}</span>
        </div>
        <input className="d-none" type="submit" />
      </form>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    user: state.user
  };
};

export default connect(mapStateToProps, {})(ChatInputPassword);

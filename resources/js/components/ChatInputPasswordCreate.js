import React from 'react';
import { connect } from 'react-redux';

class ChatInputPasswordCreate extends React.Component {
  state = { 
    errorMessage: 'Enter a password',
    hasError: false,
    password: '',
    passwordConfirm: ''
  };

  validatePasswords = () => {
    const passwordInputs = document.querySelectorAll('input.chat__input__form__input[type="password"]');
    
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (!passwordInputs[0].value || passwordInputs[0].value.length < 5) {
      this.setState({
        errorMessage: 'Enter a password, at least 5 characters long',
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

  onBlur = event => {
    if (this.props.onBlur) {
      this.props.onBlur(event);
    }
  };

  onChange = event => {
    const passwordInputs = document.querySelectorAll('input.chat__input__form__input[type="password"]');
    this.setState({
      password: passwordInputs[0].value,
      passwordConfirm: passwordInputs[1].value
    });
    
    this.validatePasswords();
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.validatePasswords();
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.password);
    }
  };

  componentWillUnmount() {
    if (this.props.onBlur) {
      this.props.onBlur();
    }
  }

  render() {
    return (
      <form onSubmit={this.onFormSubmit}>
        <div className={(this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <div className="chat__input__form">
          <input className="chat__input__form__input" name="password" type="password" placeholder="Password" value={this.state.password} onBlur={this.onBlur} onChange={this.onChange} onFocus={this.onFocus} />
          <i className="invisible chevron circle right icon chat__input__form__submit-button"></i>
        </div>
        <div className="chat__input__form">
          <input className="chat__input__form__input"  name="password-confirm" type="password" placeholder="Confirm password" value={this.state.passwordConfirm} onBlur={this.onBlur} onChange={this.onChange} onFocus={this.onFocus} />
          <i className="chevron circle right icon chat__input__form__submit-button" onClick={this.onFormSubmit}></i>
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

export default connect(mapStateToProps, {})(ChatInputPasswordCreate);

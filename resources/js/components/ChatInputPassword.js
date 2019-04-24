import React from 'react';
import { connect } from 'react-redux';

class ChatInputPassword extends React.Component {
  state = { 
    errorMessage: 'Enter your password',
    hasError: false,
    password: ''
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

  onChange = event => {
    const passwordInput = document.querySelector('input.chat__input__form__input[type="password"]');
    this.setState({
      password: passwordInput.value
    });
    
    this.validatePassword();
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.validatePassword();
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.password);
    }
  };

  render() {
    return (
      <form onSubmit={this.onFormSubmit}>
        <div className="chat__input__form">
          <input className="chat__input__form__input" name="password" type="password" placeholder="Password" value={this.state.password} onChange={this.onChange} onFocus={this.onFocus} />
          <i className="chevron circle right icon chat__input__form__submit-button"></i>
        </div>
        <div className="chat__input__form__forgotten-password">
          <a href="/password/reset">I've forgotten my password</a>
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

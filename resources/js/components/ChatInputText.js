import React from 'react';

export default class ChatInputText extends React.Component {
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

  render() {
    return (
      <form onSubmit={this.onFormSubmit}>
        <div className={(this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <div className="chat__input__form">
          <input className="chat__input__form__input" name={this.props.name} type={this.props.type || 'text'} placeholder={this.props.placeholder} value={this.state.inputText} onChange={this.onChange} onFocus={this.onFocus} />
          <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} onClick={this.onFormSubmit}></i>
        </div>
      </form>
    );
  }
};

import React from 'react';

export default class ChatInputAiViews extends React.Component {
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
        errorMessage: 'Please say a little more',
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
    
    // TODO
  };

  render() {
    return (
      <form onSubmit={this.onFormSubmit}>
        <div className={(this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <div className="chat__input__form">
          <textarea rows={this.props.rows} className="chat__input__form__input" name={this.props.name} placeholder={this.props.placeholder} value={this.state.inputText} onChange={this.onChange} onFocus={this.onFocus}></textarea>
          <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} onClick={this.onFormSubmit}></i>
        </div>
        <div className="chat__input__form__skip">
          <a href="/wall">I don't want to share anything</a>
        </div>
      </form>
    );
  }
};

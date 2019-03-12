import React from 'react';

export default class ChatInputText extends React.Component {
  state = { inputText: '' };

  onChange = event => {
    this.setState({inputText: event.target.value});
    if (this.props.onChange) {
      this.props.onChange(event);
    }
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    if (!this.props.minLength || this.state.inputText.length >= this.props.minLength) {
      this.props.onFormSubmit(this.state.inputText);
    }
  };
  
  componentDidMount() {
    const textInput = document.querySelectorAll('.chat__input__form__text-input')[0];
    textInput.focus();
  }

 renderInner() {
   return (
     <div className="chat__input__form">
       <input className="chat__input__form__text-input" name={this.props.name} type={this.props.type || 'text'} placeholder={this.props.placeholder} value={this.state.inputText} onChange={this.onChange} onFocus={this.onFocus} />
       <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} name={this.props.name} onClick={this.onFormSubmit}></i>
     </div>
   );
 }

  render() {
    return (
      <div>
        {(!this.props.form || this.props.form === 'true') ? (
          <form onSubmit={this.onFormSubmit}>
            {this.renderInner()}
          </form>
        ) : (
          this.renderInner()
        )}
      </div>
    );
  }
};

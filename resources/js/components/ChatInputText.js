import React from 'react';

export default class ChatInputText extends React.Component {
  state = { inputText: '' };

  onFormSubmit = event => {
    event.preventDefault();
    this.props.onFormSubmit(this.state.inputText);
  };
  
  componentDidMount() {
    const textInput = document.querySelector('.chat__input__form__text-input');
    textInput.focus();
  }

  render() {
    return (
      <form className="chat__input__form" onSubmit={this.onFormSubmit}>
        <input className="chat__input__form__text-input" type="text" placeholder={this.props.placeholder} value={this.state.inputText} onChange={(event) => this.setState({inputText: event.target.value})} />
        <i className="chevron circle right icon chat__input__form__submit-button" onClick={this.onFormSubmit}></i>
      </form>
    );
  }
};

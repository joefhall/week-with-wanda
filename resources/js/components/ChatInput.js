import React from 'react';
import { connect } from 'react-redux';
import { addMessage, setInput } from '../actions';
import { getHistory, respond } from '../api/chat';
import ChatMessages from './ChatMessages';

class ChatInput extends React.Component {
  state = { inputText: '' };

  addAndSendMessage = (messageId, message) => {
    this.props.addMessage(Date.now(), this.props.input.scenario, 'user', messageId, message);
    respond(this.props.input.scenario, messageId, message);
  };
  
  onFormSubmit = event => {
    event.preventDefault();
    this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], this.state.inputText);
  };

  componentDidMount() {
    getHistory();
  }

  componentDidUpdate() {
    if (this.props.input && this.props.input.type && this.props.input.type === 'none' && this.props.input.userInput) {
      this.addAndSendMessage(Object.keys(this.props.input.userInput)[0], null);
    }
  }

  renderInputChoices() {
    const userInput = this.props.input.userInput;

    return Object.keys(userInput).map((inputId) => {
      return (
        <div className="chat__input__choices__choice" key={inputId} onClick={() => this.addAndSendMessage(inputId, userInput[inputId])}>
          {userInput[inputId]}
        </div>
      );
    });
  }

  renderInput() {
    console.log('Render input:', this.props.input);
    
    if (this.props.input && this.props.input.type) {
      switch(this.props.input.type) {
        case 'choice':
          if (this.props.input.userInput) {
            return (
              <div className="chat__input__choices">
                { this.renderInputChoices() }
              </div>
            );
          }
          break;

        case 'text':
          return (
            <form className="chat__input__form" onSubmit={this.onFormSubmit}>
              <input type="text" value={this.state.inputText} onChange={(event) => this.setState({inputText: event.target.value})} />
              <button>Send</button>
            </form>
          );
          break;

        case 'none':
          break;
      }
    }
  }
  
  render() {
    return (
      <div className="chat__input">
        { this.renderInput() }
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input,
    message: state.message
  };
};

export default connect(mapStateToProps, { addMessage, setInput })(ChatInput);

import React from 'react';
import { connect } from 'react-redux';
import { addMessage } from '../actions';
import { respond } from '../api/chat';

class ChatInput extends React.Component {
  state = { inputText: '' };

  addAndSendMessage = (message) => {
    this.props.addMessage(message, 'user');
    respond(message);
  };
  
  onFormSubmit = event => {
    event.preventDefault();
    this.addAndSendMessage(this.state.inputText);
  };
  
  render() {
    return (
      <div className="chat__input">
        <div className="chat__input__choices">
          <div className="chat__input__choices__choice" onClick={() => this.props.addMessage('hi')}></div>
        </div>
        <form className="chat__input__form" onSubmit={this.onFormSubmit}>
          <input type="text" value={this.state.inputText} onChange={(event) => this.setState({inputText: event.target.value})} />
          <button>Send</button>
        </form>
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return { message: state.message };
};

export default connect(mapStateToProps, { addMessage })(ChatInput);

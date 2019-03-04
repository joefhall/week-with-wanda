import React from 'react';
import { connect } from 'react-redux';
import { addMessage } from '../actions';

class ChatMessages extends React.Component {
  jumpToBottom = () => {
    const chatMessages = document.querySelector('.chat__messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }
  
  componentDidMount() {
    this.jumpToBottom();
  }

  componentDidUpdate() {
    console.log('Chat messages updated');
    this.jumpToBottom();
  }
  
  renderMessages() {
    if (this.props.messages.length) {
      return this.props.messages.map((message) => {
        const date = new Date(message.time);
        const formattedTime = date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ', ' + date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2);
        
        return (
          <div className={'chat__messages__message chat__messages__message--' + message.sender} key={message.time}>
            <div className={'chat__messages__message__bubble--' + message.sender}>
              {message.message}
            </div>
            <div className="chat__messages__message__time">
              {formattedTime}
            </div>
          </div>
        );
      });
    }
  }
  
  render() {
    return (
      <div className="chat__messages">
        { this.renderMessages() }
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return { messages: state.messages };
};

export default connect(mapStateToProps, { addMessage })(ChatMessages);

import React from 'react';
import { connect } from 'react-redux';
import { addMessage } from '../actions';

class ChatMessages extends React.Component {
  renderMessages() {
    if (this.props.messages.length) {
      return this.props.messages.map((message) => {
        const date = new Date(message.time);
        const formattedTime = date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2);
        
        return (
          <div className="chat__messages__message chat__messages__message--{message.sender}" key={message.time}>
            {message.message} {formattedTime}
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
  console.log('mapStateToProps state.messages');
  console.log(state.messages);
  return { messages: state.messages };
};

export default connect(mapStateToProps, { addMessage })(ChatMessages);

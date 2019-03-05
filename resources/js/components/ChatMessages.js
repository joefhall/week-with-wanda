import React from 'react';
import { connect } from 'react-redux';
import { addMessage } from '../actions';
import ChatTyping from './ChatTyping';

class ChatMessages extends React.Component {
  constructor(){
    super();
    
    this.specialMessageSeparator = '*';
    this.specialMessageTypes = {
      image: {
        params: ['src']
      }
    };
   }
  
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

  specialMessageType = message => {
    for (let specialMessageType of Object.keys(this.specialMessageTypes)) {
      if (message.includes(this.specialMessageSeparator + specialMessageType)) {
        return specialMessageType;    
      }
    }
    
    return null;
  };

  renderMessage = message => {
    const specialMessageType = this.specialMessageType(message);
    
    if (specialMessageType) {      
      const regExp = /\(([^)]+)\)/;
      const parameterValues = regExp.exec(message)[1].split(',');
      let parameters = {};
      let paramCount = 0;
      for (let paramKey of this.specialMessageTypes[specialMessageType].params) {
        parameters[paramKey] = parameterValues[paramCount];
        paramCount++;
      }
      
      switch(specialMessageType) {
        case 'image':
          return (
            <img src={parameters.src} className="chat__messages__message__bubble__image" />
          );
          break;
      }
    }
    
    return message;
  };

  renderDay = (previousDay, currentDay) => {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    
    if (currentDay !== previousDay) {
      return (
        <div className="chat__messages__day" key={daysOfWeek[currentDay]}>
          {daysOfWeek[currentDay]}
        </div>
      );
    }
  };
  
  renderMessages() {
    if (this.props.messages.length) {
      return this.props.messages.map((message, index, messages) => {
        const date = new Date(message.time);
        const formattedTime = date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ', ' + date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2);
        
        let previousDay = null;
        if (index > 0) {
          const previousTime = messages[index -1].time;
          previousDay = new Date(previousTime).getDay();
        }
        
        return (
          <div key={message.time}>
            { this.renderDay(previousDay, date.getDay()) }

            <div className={'chat__messages__message chat__messages__message--' + message.sender}>
              <div className={'chat__messages__message__bubble chat__messages__message__bubble--' + message.sender}>
                { this.renderMessage(message.message) }
                <div className="chat__messages__message__time">
                  {formattedTime}
                </div>
              </div>
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
        <ChatTyping />
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input,
    messages: state.messages,
    typing: state.typing
  };
};

export default connect(mapStateToProps, { addMessage })(ChatMessages);

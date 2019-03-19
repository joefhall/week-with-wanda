import React from 'react';
import { connect } from 'react-redux';
import { addMessage } from '../actions';
import ChatTyping from './ChatTyping';
import ReactHtmlParser, { processNodes, convertNodeToElement, htmlparser2 } from 'react-html-parser';

class ChatMessages extends React.Component {  
  jumpToBottom = () => {
    const chatMessagesBottom = document.querySelector('.chat__messages__bottom');
    chatMessagesBottom.scrollIntoView({ behavior: 'smooth' });
  };
  
  addImagesOnLoad = () => {
    const dataAttribute = 'data-loaded-listener';
    const chatImagesWithoutLoadListener = document.querySelectorAll(`.chat__messages__message__bubble--wanda img:not([dataAttribute])`);
    chatImagesWithoutLoadListener.forEach(image => {
      image.addEventListener('load', this.jumpToBottom);
      image.setAttribute(dataAttribute, 'true');
    });
  };
  
  componentDidMount() {
    this.jumpToBottom();
  }

  componentDidUpdate() {
    console.log('Chat messages updated');
    this.jumpToBottom();
    this.addImagesOnLoad();
  }

  renderDay = (previousDay, previousDate, currentDay, currentDate) => {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const dayToday = new Date().getDay();
    const dateToday = new Date().getDate();
    
    if (currentDay !== previousDay && currentDate !== previousDate) {
      return (
        <div className="chat__messages__day" key={daysOfWeek[currentDay]}>
          {(currentDate === dateToday) ? 'Today' : daysOfWeek[currentDay]}
        </div>
      );
    }
  };
  
  renderMessages() {
    if (this.props.messages.length) {
      return this.props.messages.map((message, index, messages) => {
        if (!message.message || !message.message.length) {
          return;
        }
            
        const date = new Date(message.time);
        const formattedTime = date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2);
        
        let previousDay = null;
        let previousDate = null;
        if (index > 0) {
          const previousTime = messages[index -1].time;
          if (message.time === previousTime) {
            message.time = message.time + 1;
          }
          previousDay = new Date(previousTime).getDay();
          previousDate = new Date(previousTime).getDate();
        }
        
        return (
          <div key={message.time}>
            { this.renderDay(previousDay, previousDate, date.getDay(), date.getDate()) }

            <div className={'chat__messages__message chat__messages__message--' + message.sender}>
              <div className={'chat__messages__message__bubble chat__messages__message__bubble--' + message.sender}>
                { ReactHtmlParser(message.message) }
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
        <div className="chat__messages__bottom"></div>
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

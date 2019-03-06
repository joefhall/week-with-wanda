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
        const formattedTime = date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2);
        
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

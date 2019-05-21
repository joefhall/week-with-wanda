import React from 'react';
import { connect } from 'react-redux';
import { setTyping } from '../actions';

class ChatTyping extends React.Component {
  componentDidUpdate() {
    const chatMessagesBottom = document.querySelector('.chat__messages__bottom');
    if (chatMessagesBottom) {
      chatMessagesBottom.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  render() {
    return (
      <div className={'chat__messages__typing chat__messages__message chat__messages__message--wanda ' + (this.props.typing ? 'd-block' : 'd-none')}>
        <div className="chat__messages__message__bubble chat__messages__message__bubble--wanda chat__messages__message__bubble--typing">
          <div className="chat__messages__typing">
            <div className="chat__messages__typing__indicator">
              <img src="/img/typing-bounce.svg" alt="Typing" />
            </div>
          </div>
        </div>
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    typing: state.typing
  };
};

export default connect(mapStateToProps, { setTyping })(ChatTyping);

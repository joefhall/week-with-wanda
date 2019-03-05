import React from 'react';
import { connect } from 'react-redux';
import { setTyping } from '../actions';

class ChatTyping extends React.Component {  
  render() {
    console.log('Typing is...', this.props.typing);
    return (
      <div className={'chat__messages__typing chat__messages__message chat__messages__message--wanda ' + (this.props.typing ? 'd-block' : 'd-none')}>
        <div className="chat__messages__message__bubble chat__messages__message__bubble--wanda chat__messages__message__bubble--typing">
          <div className="chat__messages__typing">
            <div className="chat__messages__typing__indicator">
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

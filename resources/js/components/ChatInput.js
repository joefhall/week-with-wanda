import React from 'react';
import { connect } from 'react-redux';
import { inputMessage } from '../actions';

class ChatInput extends React.Component {
  state = { inputText: '' };
  
  onFormSubmit = event => {
    event.preventDefault();

    this.props.inputMessage(this.state.inputText);
  }
  
  render() {
    return (
      <div className="chat__input">
        <div className="chat__input__choices">
          <div className="chat__input__choices__choice" onClick={() => this.props.inputMessage('hi')}>Hi</div>
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

export default connect(mapStateToProps, { inputMessage })(ChatInput);

import React from 'react';
import { connect } from 'react-redux';

import ChatAiViews from './ChatAiViews';
import ChatInput from './ChatInput';
import ChatLoading from './ChatLoading';
import ChatMessages from './ChatMessages';
import ChatWanda from './ChatWanda';

class Chat extends React.Component {
  constructor() {
    super();
    
    this.state = {
      height: window.innerHeight
    }
  }

  updateDimensions() {
    this.setState({ height: window.innerHeight });
  }

  componentDidMount() {
    this.updateDimensions();
    window.addEventListener('resize', this.updateDimensions.bind(this));
  }

  renderMainPane() {
    if (this.props.input && this.props.input.type === 'aiViews') {
      return (
        <ChatAiViews />
      );
    } else {
      return (
        <ChatMessages />
      );
    }
  }
  
  render() {
    return (
      <div  style={{ height: this.state.height }}>
        <div className="chat">
          <ChatWanda />
          <ChatLoading />
          { this.renderMainPane() }
          <ChatInput />
        </div>
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input
  };
};

export default connect(mapStateToProps, {})(Chat);

import React from 'react';
import { connect } from 'react-redux';

class ChatMeltdown extends React.Component {
  startMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    chatWindow.classList.add('shake');
    
    const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
    fuzzyScreen.classList.remove('d-none');
  };

  endMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    chatWindow.classList.remove('shake');
    
    const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
    fuzzyScreen.classList.add('d-none');
  };
  
  componentDidUpdate() {
    if (this.props.meltdownLevel > 0 && this.props.meltdownLevel == Math.round(this.props.meltdownLevel)) {
      this.startMeltdownTransition();
      const delay = 500 + (this.props.meltdownLevel * 250);
      setInterval(this.endMeltdownTransition, delay);
    }
  }
  
  render() {
    console.log('Meltdown level is...', this.props.meltdownLevel);
    
    return (
      <div className="chat__meltdown">
        <div style={{padding: '10px 0 0 0', position: 'absolute'}}>
          { this.props.meltdownLevel }
        </div>
        <img src="/img/meltdowns/fuzzy-screen.gif" className="chat__meltdown__fuzzy-screen d-none" alt="Fuzzy screen" />
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    meltdownLevel: state.meltdownLevel
  };
};

export default connect(mapStateToProps, {})(ChatMeltdown);

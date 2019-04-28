import React from 'react';
import { connect } from 'react-redux';

class ChatMeltdown extends React.Component {
  startMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    if (chatWindow) {
      chatWindow.classList.add('shake');
    }
    
    const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
    if (fuzzyScreen && this.props.meltdownLevel > 3) {
      fuzzyScreen.classList.remove('d-none');
    }
  };

  endMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    if (chatWindow) {
      chatWindow.classList.remove('shake');
    }
    
    const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
    if (fuzzyScreen && this.props.meltdownLevel > 3) {
      fuzzyScreen.classList.add('d-none'); 
    }
  };
  
  componentDidUpdate() {
    if (this.props.messages.length >= 4) {
      const messagesReversed = this.props.messages.slice().reverse();
      
      let lastWandaMessage = null;
      let count = 0;
      
      while (lastWandaMessage === null && count < messagesReversed.length) {
        if (messagesReversed[count].sender === 'wanda') {
          if (lastWandaMessage === null) {
            lastWandaMessage = messagesReversed[count];
          }
        }
        
        count++;
      }

      if (
        this.props.meltdownLevel > 0 &&
        lastWandaMessage &&
        lastWandaMessage.meltdownLevel &&
        this.props.meltdownLevel != lastWandaMessage.meltdownLevel &&
        (this.props.meltdownLevel == Math.round(this.props.meltdownLevel) ||
        this.props.meltdownLevel - lastWandaMessage.meltdownLevel >= 1)
      ) {
        console.log('Starting meltdown transition', lastWandaMessage.id, lastWandaMessage.meltdownLevel, 'Level', this.props.meltdownLevel, 'rounded', Math.round(this.props.meltdownLevel));
        this.startMeltdownTransition();
        const delay = 500 + (this.props.meltdownLevel * 250);
        setTimeout(this.endMeltdownTransition, delay);
      }
    }
  }
  
  render() {
    console.log('Meltdown level is...', this.props.meltdownLevel);
    
    const crackImage = document.querySelector('.chat__meltdown__cracks');
    let crackImageTopClip;
    let crackImageBottomClip;
    let crackImageLeftClip;
    let crackImageRightClip;
    
    if (crackImage && this.props.meltdownLevel >= 1) {
      const crackImageHeight = document.querySelector('.chat__meltdown__cracks').clientHeight;
      const crackImageWidth = document.querySelector('.chat__meltdown__cracks').clientWidth;
      const crackImageMaxLevel = 8;
      const crackImageMultiplier = this.props.meltdownLevel < crackImageMaxLevel ? this.props.meltdownLevel : crackImageMaxLevel;
      crackImageTopClip = 20 + crackImageHeight * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / crackImageMaxLevel));
      crackImageBottomClip = -20 + crackImageHeight - (crackImageHeight * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / crackImageMaxLevel)));
      crackImageLeftClip = crackImageWidth * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / crackImageMaxLevel));
      crackImageRightClip = -20 + crackImageWidth - (crackImageWidth * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / crackImageMaxLevel)));
    } else {
      crackImageTopClip = 0;
      crackImageBottomClip = 113;
      crackImageLeftClip = 0;
      crackImageRightClip = 200;
    }
    
    return (
      <div className="chat__meltdown">
        <img src="/img/meltdowns/fuzzy-screen.gif" className="chat__meltdown__fuzzy-screen d-none" alt="Fuzzy screen" />
        
        <img style={{ clip: `rect(auto ${crackImageLeftClip}px ${crackImageTopClip}px auto)` }} src="/img/meltdowns/cracks-top-left.png" className="chat__meltdown__cracks chat__meltdown__cracks--top chat__meltdown__cracks--left" alt="Broken glass" />
        <img style={{ clip: `rect(auto auto ${crackImageTopClip}px ${crackImageRightClip}px)` }} src="/img/meltdowns/cracks-top-right.png" className="chat__meltdown__cracks chat__meltdown__cracks--top chat__meltdown__cracks--right" alt="Broken glass" />
        <img style={{ clip: `rect(${crackImageBottomClip}px ${crackImageLeftClip}px auto auto)` }} src="/img/meltdowns/cracks-bottom-left.png" className="chat__meltdown__cracks chat__meltdown__cracks--bottom chat__meltdown__cracks--left" alt="Broken glass" />
        <img style={{ clip: `rect(${crackImageBottomClip}px auto auto ${crackImageRightClip}px)` }} src="/img/meltdowns/cracks-bottom-right.png" className="chat__meltdown__cracks chat__meltdown__cracks--bottom chat__meltdown__cracks--right" alt="Broken glass" />
        
        <img src="/img/meltdowns/dirt.png" className={'chat__meltdown__dirt' + ((this.props.meltdownLevel >= 1) ? '' : ' d-none')} alt="Dirt" />
        
        <img src="/img/meltdowns/fly.gif" className={'chat__meltdown__fly' + ((this.props.meltdownLevel >= 2) ? '' : ' d-none')} alt="Fly" />
        
        <img src="/img/meltdowns/mud.png" className={'chat__meltdown__mud' + ((this.props.meltdownLevel >= 3) ? '' : ' d-none')} alt="Mud" />
        
        <img src="/img/meltdowns/bricks-corner.png" className={'chat__meltdown__bricks' + ((this.props.meltdownLevel >= 4) ? '' : ' d-none')} alt="Exposed brickwork" />
        
        <img src="/img/meltdowns/water.gif" className={'chat__meltdown__water' + ((this.props.meltdownLevel >= 5) ? '' : ' d-none')} alt="Water" />
        
        <img src="/img/meltdowns/flame2.gif" className={'chat__meltdown__flame' + ((this.props.meltdownLevel >= 8) ? '' : ' d-none')} alt="Flames" />
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    meltdownLevel: state.meltdownLevel,
    messages: state.messages
  };
};

export default connect(mapStateToProps, {})(ChatMeltdown);

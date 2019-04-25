import React from 'react';
import { connect } from 'react-redux';

class ChatMeltdown extends React.Component {
  startMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    chatWindow.classList.add('shake');
    
    if (this.props.meltdownLevel > 2) {
      const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
      fuzzyScreen.classList.remove('d-none');
    }
  };

  endMeltdownTransition = () => {
    const chatWindow = document.querySelector('.chat');
    chatWindow.classList.remove('shake');
    
    if (this.props.meltdownLevel > 2) {
      const fuzzyScreen = document.querySelector('.chat__meltdown__fuzzy-screen');
      fuzzyScreen.classList.add('d-none'); 
    }
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
    
    const crackImage = document.querySelector('.chat__meltdown__cracks');
    let crackImageTopClip;
    let crackImageBottomClip;
    let crackImageLeftClip;
    let crackImageRightClip;
    
    if (crackImage && this.props.meltdownLevel >= 1) {
      const crackImageHeight = document.querySelector('.chat__meltdown__cracks').clientHeight;
      const crackImageWidth = document.querySelector('.chat__meltdown__cracks').clientWidth;
      const crackImageMultiplier = this.props.meltdownLevel < 5 ? this.props.meltdownLevel : 5;
      crackImageTopClip = 20 + crackImageHeight * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / 5));
      crackImageBottomClip = -20 + crackImageHeight - (crackImageHeight * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / 5)));
      crackImageLeftClip = crackImageWidth * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / 5));
      crackImageRightClip = -20 + crackImageWidth - (crackImageWidth * (crackImageMultiplier == 0 ? 0 : (crackImageMultiplier / 5)));
    } else {
      crackImageTopClip = 0;
      crackImageBottomClip = 113;
      crackImageLeftClip = 0;
      crackImageRightClip = 200;
    }
    
    return (
      <div className="chat__meltdown">
        <div style={{padding: '10px 0 0 0', position: 'absolute'}}>
          { this.props.meltdownLevel }
        </div>
        
        <img src="/img/meltdowns/fuzzy-screen.gif" className="chat__meltdown__fuzzy-screen d-none" alt="Fuzzy screen" />
        
        <img style={{ clip: `rect(auto ${crackImageLeftClip}px ${crackImageTopClip}px auto)` }} src="/img/meltdowns/cracks-top-left.png" className="chat__meltdown__cracks chat__meltdown__cracks--top chat__meltdown__cracks--left" alt="Broken glass" />
        <img style={{ clip: `rect(auto auto ${crackImageTopClip}px ${crackImageRightClip}px)` }} src="/img/meltdowns/cracks-top-right.png" className="chat__meltdown__cracks chat__meltdown__cracks--top chat__meltdown__cracks--right" alt="Broken glass" />
        <img style={{ clip: `rect(${crackImageBottomClip}px ${crackImageLeftClip}px auto auto)` }} src="/img/meltdowns/cracks-bottom-left.png" className="chat__meltdown__cracks chat__meltdown__cracks--bottom chat__meltdown__cracks--left" alt="Broken glass" />
        <img style={{ clip: `rect(${crackImageBottomClip}px auto auto ${crackImageRightClip}px)` }} src="/img/meltdowns/cracks-bottom-right.png" className="chat__meltdown__cracks chat__meltdown__cracks--bottom chat__meltdown__cracks--right" alt="Broken glass" />
        
        <img src="/img/meltdowns/flame2.gif" className="chat__meltdown__flame" alt="Flames" />
        
        <img src="/img/meltdowns/fly.gif" className="chat__meltdown__fly" alt="Fly" />
        
        <img src="/img/meltdowns/water.gif" className="chat__meltdown__water" alt="Water" />
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

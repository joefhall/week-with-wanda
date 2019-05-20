import React from 'react';
import { connect } from 'react-redux';

import ChatMeltdown from './ChatMeltdown';

class ChatWanda extends React.Component {
  state = {
    minHeight: 225,
    referenceSizes: {
      height: 225,
      smallScreenHeight: 568,
      smallScreenVerticalCrop: 36,
      width: 400
    }
  };
  
  onLoad = () => {
    document.querySelector('.chat__wanda__image').classList.remove('d-none');
  }
  
  resize = () => {
    const subtractFromHeight = (window.innerHeight < this.state.referenceSizes.smallScreenHeight) ? this.state.referenceSizes.smallScreenVerticalCrop : 0;
    
    this.setState({
      minHeight: (this.state.referenceSizes.height * (document.querySelector('.chat__wanda').clientWidth / this.state.referenceSizes.width)) - subtractFromHeight
    });
  }
  
  componentDidMount() {
    this.resize();
    window.onresize = this.resize;
  }
  
  render() {
    let emotion = (this.props.emotion && !Array.isArray(this.props.emotion)) ? this.props.emotion : 'base';
    const identity = (this.props.identity && !Array.isArray(this.props.identity)) ? this.props.identity : null;
    
    if (identity) {
      emotion = this.props.identity;
    }
    
    console.log('Emotion is...', emotion);
    
    return (
      <div className="chat__wanda" style={{ minHeight: `${this.state.minHeight}px`, maxHeight: '1000px' }}>
        <ChatMeltdown />
        
        <div className="chat__wanda__title">
          <div className={'chat__wanda__title--1' + (identity ? ' d-none' : '')}>A Week With</div>
          <div className="chat__wanda__title--2"><div className={'chat__wanda__title--2--w' + ((this.props.meltdownLevel >= 6 && this.props.meltdownLevel < 50) ? ' chat__wanda__title--2--w--rotate' : '')}>W</div>{ identity ? identity.slice(1) : 'anda' }</div>
        </div>
        <img src={`/img/emotions/${emotion}.gif`} onLoad={this.onLoad} className={`chat__wanda__image chat__wanda__image--${emotion}`} alt="Wanda" />
        
        <img src="/img/emotions/base.gif" className="invisible h-0" alt="Wanda" />
        <img src="/img/emotions/angry.gif" className="invisible h-0" alt="Wanda angry" />
        <img src="/img/emotions/blown-up.gif" className="invisible h-0" alt="Wanda blown up" />
        <img src="/img/emotions/clapping.gif" className="invisible h-0" alt="Wanda clapping" />
        <img src="/img/emotions/clapping.gif" className="invisible h-0" alt="Wanda complimenting" />
        <img src="/img/emotions/elated.gif" className="invisible h-0" alt="Wanda elated" />
        <img src="/img/emotions/frustrated.gif" className="invisible h-0" alt="Wanda frustrated" />
        <img src="/img/emotions/heart.gif" className="invisible h-0" alt="Wanda making heart sign" />
        <img src="/img/emotions/meltdown.gif" className="invisible h-0" alt="Wanda having a meltdown" />
        <img src="/img/emotions/shocked.gif" className="invisible h-0" alt="Wanda shocked" />
        <img src="/img/emotions/thumbs-down.gif" className="invisible h-0" alt="Wanda making thumbs down gesture" />
        <img src="/img/emotions/thumbs-up.gif" className="invisible h-0" alt="Wanda making thumbs up gesture" />
        <img src="/img/emotions/unhappy.gif" className="invisible h-0" alt="Wanda looking unhappy" />
        <img src="/img/emotions/waving.gif" className="invisible h-0" alt="Wanda waving" />
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    emotion: state.emotion,
    identity: state.identity,
    meltdownLevel: state.meltdownLevel
  };
};

export default connect(mapStateToProps, {})(ChatWanda);

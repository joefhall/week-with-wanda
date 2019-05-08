import React from 'react';
import { connect } from 'react-redux';

import ChatMeltdown from './ChatMeltdown';
import SiteMenu from './SiteMenu';

class ChatWanda extends React.Component {
  onLoad = () => {
    document.querySelector('.chat__wanda__image').classList.remove('d-none');
  }
  
  render() {
    let emotion = (this.props.emotion && !Array.isArray(this.props.emotion)) ? this.props.emotion : 'base';
    const identity = (this.props.identity && !Array.isArray(this.props.identity)) ? this.props.identity : null;
    
    if (identity) {
      emotion = this.props.identity;
    }
    
    console.log('Emotion is...', emotion);
    
    return (
      <div className="chat__wanda">
        <ChatMeltdown />
        <SiteMenu />
        
        <div className="chat__wanda__title">
          <div className={'chat__wanda__title--1' + (identity ? ' d-none' : '')}>A Week With</div>
          <div className="chat__wanda__title--2"><div className={'chat__wanda__title--2--w' + ((this.props.meltdownLevel >= 6 && this.props.meltdownLevel < 50) ? ' chat__wanda__title--2--w--rotate' : '')}>W</div>{ identity ? identity.slice(1) : 'anda' }</div>
        </div>
        <img src={`/img/emotions/${emotion}.gif`} onLoad={this.onLoad} className={`chat__wanda__image chat__wanda__image--${emotion} d-none`} alt="Wanda" />
        
        <img src="/img/emotions/elated.gif" className="invisible h-0" alt="Wanda elated" />
        <img src="/img/emotions/frustrated.gif" className="invisible h-0" alt="Wanda frustrated" />
        <img src="/img/emotions/heart.gif" className="invisible h-0" alt="Wanda making heart sign" />
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

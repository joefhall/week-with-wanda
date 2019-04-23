import React from 'react';
import { connect } from 'react-redux';

class ChatWanda extends React.Component {
  onLoad = () => {
    document.querySelector('.chat__wanda__image').classList.remove('d-none');
  }
  
  render() {
    console.log('Emotion is...', this.props.emotion);
    const emotion = (!Array.isArray(this.props.emotion) && this.props.emotion) ? this.props.emotion : 'base';
    
    return (
      <div className="chat__wanda">
        <div className="chat__wanda__title">
          <div className="chat__wanda__title--1">A Week With</div>
          <div className="chat__wanda__title--2">Wanda</div>
        </div>
        <img src={`/img/emotions/${emotion}.gif`} onLoad={this.onLoad} className={`chat__wanda__image chat__wanda__image--${this.props.emotion}` + (this.props.emotion === 'base' ? ' invisible h-0' : '') + ' d-none'} alt="Wanda" />
        
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
    emotion: state.emotion
  };
};

export default connect(mapStateToProps, {})(ChatWanda);

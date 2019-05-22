import React from 'react';

export default class ChatInputShare extends React.Component {
  render() {
    return (
      <div>
        <div className="chat__input__form">
          <div className="chat__input__choices">
            <a className="chat__input__choices__choice chat__input__choices__choice__share--facebook" href={`https://www.facebook.com/sharer/sharer.php?u=https%3A//weekwithwanda.com/?share=${this.props.scenario}`} key="facebook" target="_blank">
              <img className="chat__input__choices__choice__share__icon" alt="Facebook logo" src="/img/share/facebook.svg" />
              Share
            </a>
            <a className="chat__input__choices__choice chat__input__choices__choice__share--twitter" href={`https://twitter.com/intent/tweet?url=https%3A%2F%2Fweekwithwanda.com%2F%3Fshare%3D${this.props.scenario}&text=I%27m%20playing%20this%20hilarious%20game...%20an%20AI%20bot%20seems%20to%20be%20taking%20over%20my%20life%21&hashtags=ai%20weekwithwanda`} key="twitter" target="_blank">
              <img className="chat__input__choices__choice__share__icon" alt="Twitter logo" src="/img/share/twitter.svg" />
              Tweet
            </a>
          </div>
        </div>
      </div>
    );
  }
};

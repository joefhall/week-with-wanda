import React from 'react';
import HamburgerMenu from 'react-hamburger-menu';

export default class SiteMenu extends React.Component {
  state = {
    open: false
  };
  
  handleClick = () => {
    this.setState({
      open: !this.state.open
    });
  };
  
  renderLogInOut = loggedIn => {
    const link = loggedIn ? 'logout' : 'login';
    const text = loggedIn ? 'Log out' : 'Log in';
    
    return this.renderMenuItem(link, text);
  };

  renderMenuItem = (link, text) => {
    return (
      <div className="site-menu__items__item">
        <a className="site-menu__items__item__link" href={`/${link}`}>{text}</a>
      </div>
    );
  };

  renderUnsubscribe = loggedIn => {
    if (loggedIn) {
      return this.renderMenuItem('unsubscribe', 'Unsubscribe');
    }
  };
  
  render() {
    const loggedInFlag = document.head.querySelector('meta[name="logged-in"]');
    const loggedIn = loggedInFlag && loggedInFlag.content && loggedInFlag.content === 'true';
    
    return (
      <div className={ 'site-menu' + (this.state.open ? ' site-menu--open' : ' site-menu--closed') }>
        <div className="site-menu__hamburger">
          <HamburgerMenu
            isOpen={this.state.open}
            menuClicked={this.handleClick.bind(this)}
            width={26}
            height={22}
            strokeWidth={2}
            rotate={0}
            color='darkviolet'
            borderRadius={2}
            animationDuration={0.5}
          />
        </div>
        <div className={ 'site-menu__items' + (this.state.open ? ' site-menu__items--open' : ' site-menu__items--closed') }>
          { this.renderMenuItem('', 'Home') }
          { this.renderMenuItem('about', 'About') }
          { this.renderMenuItem('privacy', 'Terms & privacy') }
          { this.renderLogInOut(loggedIn) }
          { this.renderUnsubscribe(loggedIn) }
        </div>
      </div>
    );
  }
};

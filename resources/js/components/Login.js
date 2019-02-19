import React from 'react';
import FacebookLogin from 'react-facebook-login';

const config = require('../config.json');

export default class Login extends React.Component {
  state = { isAuthenticated: false, user: null, token: ''};

  logout = () => {
    this.setState({isAuthenticated: false, token: '', user: null})
  };

  facebookResponse = (e) => {};

  onFailure = (error) => {
    console.log(error);
  };
  
  renderContent = () => {
    if (!!this.state.isAuthenticated) {
      return (
        <div>
          <p>Authenticated</p>
          <div>
            {this.state.user.email}
          </div>
          <div>
            <button onClick={this.logout} className="button">
              Log out
            </button>
          </div>
        </div>
      );
    } else {
      return (
        <div>
          <FacebookLogin
            appId={config.FACEBOOK_APP_ID}
            autoLoad={false}
            fields="name,email,picture"
            callback={this.facebookResponse}
          />
        </div>
      );
    }
  };
  
  render() {
    return (
      <div>
        {this.renderContent()}
      </div>
    );
  }
};

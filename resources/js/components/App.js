import React from 'react';
import Chat from './Chat';
import Login from './Login';
import LoginFacebook from './LoginFacebook';
import Register from './Register';

export default class App extends React.Component {
  state = {
    isAuthenticated: false,
    isLoggedIn: false,
    user: null
  };
  
  render() {
    return (
      <div>
        {/* <LoginFacebook logout={this.logout} /> */}
        <Login />
        <Register />
        <Chat />
      </div>
    );
  }
}

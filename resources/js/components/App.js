import React from 'react';
import Chat from './Chat';
import Register from './Register';

export default class App extends React.Component {
  state = {
    isAuthenticated: false,
    isLoggedIn: false,
    user: null
  };

  refreshCSRFToken = () => {
    console.log('Refreshing page');
    window.location.reload(true);
  };

  componentDidMount() {
    window.setTimeout(this.refreshCSRFToken, 1000 * 60 * 120);
  }
  
  render() {
    return (
      <div className="d-flex h-100 align-items-center justify-content-center">
        <Chat />
      </div>
    );
  }
}

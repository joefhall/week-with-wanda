import React from 'react';

import Chat from './Chat';

export default class App extends React.Component {
  state = {
    isAuthenticated: false,
    isLoggedIn: false,
    user: null
  };

  refreshCSRFToken = () => {
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

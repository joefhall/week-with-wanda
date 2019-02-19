import React from 'react';
import Chat from './Chat';
import Login from './Login';

export default class App extends React.Component {
  state = {};
  
  render() {
    return (
      <div>
        <Login />
        <Chat />
      </div>
    );
  }
}

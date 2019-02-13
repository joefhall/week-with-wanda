require('./bootstrap');

import React from 'react';
import ReactDOM from 'react-dom';
import ChatHolder from './components/ChatHolder';

class App extends React.Component {
  render() {
    return (
      <ChatHolder />
    );
  }
}

ReactDOM.render(
  <App />,
  document.querySelector('#root')
);

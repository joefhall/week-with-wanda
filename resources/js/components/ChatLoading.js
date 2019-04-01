import React from 'react';

export default class ChatLoading extends React.Component {  
  render() {
    return (
      <div className="chat__loading d-none">
        <img src="/img/loading-balls.gif" alt="" />
      </div>
    );
  }
};

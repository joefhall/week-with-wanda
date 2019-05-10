import React from 'react';

export default class ChatInputCloseWindow extends React.Component {
  onClick = () => {
    window.close();
  };

  render() {
    return (
      <div>
        <div className="chat__input__form">
          <div className="chat__input__choices">
            <div className="chat__input__choices__choice" onClick={this.onClick}>
              Close window
            </div>
          </div>
        </div>
      </div>
    );
  }
};

import axios from 'axios';
import React from 'react';
import { connect } from 'react-redux';

import { setUserProperty } from '../actions';
import store from '../store';

class ChatAiViews extends React.Component {
  state = { 
    aiViews: null,
    countryName: null,
    error: false,
    name: null
  };

  addMessageToTextArea = (entryId, message) => {
    const textArea = document.querySelector('.chat__input__form__input');
    textArea.value += message + ' ';
    
    this.hideEntry(entryId);
  };
  
  getViews = async () => {
    try {
      const response = await axios.get('/api/ai-views');

      if (response.data.error) {
        console.log(`An error occured getting AI views back from the server: ${response.data.error}`);
        this.setState({
          error: true
        });
      } else {
        this.setState({
          aiViews: response.data.views,
          countryName: response.data.countryName,
          name: response.data.name
        });
      }
    } catch(error) {
      console.log(`An error occured getting AI views back from the server: ${error}`);
      this.setState({
        error: true
      });
    }
  };

  hideEntry = entryId => {
    const entry = document.querySelector(`#${entryId}`);
    entry.classList.add('chat__ai-views__views__view__entry--hidden');
    
    setTimeout(() => { entry.classList.add('d-none'); }, 1000);
  };
  
  componentDidMount() {
    this.getViews();
  }

  componentDidUpdate() {
    if (this.state.countryName) {
      store.dispatch(setUserProperty('countryName', this.state.countryName));
    }
    if (this.state.name) {
      store.dispatch(setUserProperty('name', this.state.name));
    }
  }

  renderAiView(aiView) {
    return aiView.messages.map((message, index) => {
      let messageId = message.replace(/\W/g, '');
      if (messageId.length > 30) {
        messageId = messageId.substring(0,30);
      }
            
      return (
        <div key={index} id={`chat__ai-views__views__view__entry__${messageId}`} className="chat__ai-views__views__view__entry" onClick={ event => this.addMessageToTextArea(`chat__ai-views__views__view__entry__${messageId}`, message) }>
          <div className="chat__ai-views__views__view__entry__message chat__messages__message chat__messages__message--user">
            <div className="chat__ai-views__views__view__entry__add">
              <div>
                <i className="plus square icon"></i> Add</div>
              </div>
            <div className="chat__ai-views__views__view__entry__message chat__messages__message__bubble chat__messages__message__bubble--user">
              { message }
            </div>
          </div>
        </div>
      );
    });
  }

  renderAiViews() {
    return this.state.aiViews.map((aiView, index) => {
      return (
        <div key={index} key={index} className="chat__ai-views__view">
          <div className="chat__ai-views__views__view__description">
            { aiView.description }
          </div>
          { this.renderAiView(aiView) }
        </div>
      );
    });
  }

  renderUserDetails() {
    if (this.state.name && this.state.countryName) {
      return (
        <div className="chat__messages__message chat__messages__message--wanda">
          <div className="chat__ai-views__views__wanda__message__bubble--extra-wide chat__messages__message__bubble chat__messages__message__bubble--wanda">
            You'll just show as '{this.state.name} from {this.state.countryName}'
          </div>
        </div>
      );
    }
  }
  
  render() {  
    return (
      <div className="chat__ai-views">
        <div className="chat__ai-views__wanda">
          <div className="chat__messages__message chat__messages__message--wanda">
            <div className="chat__ai-views__views__wanda__message__bubble--extra-wide chat__messages__message__bubble chat__messages__message__bubble--wanda">
              Will you share your views on the future of AI for <strong><a href="/wall" target="_blank">my wall</a></strong>? { this.state.aiViews ? 'Just' : 'Tap to add and/or' } type below
            </div>
          </div>
          { this.renderUserDetails() }
        </div>
        
        <div className="chat__ai-views__views">
          { this.state.aiViews ? this.renderAiViews() : (this.state.error ? '' : 'Loading...') }
        </div>
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    //
  };
};

export default connect(mapStateToProps, {})(ChatAiViews);

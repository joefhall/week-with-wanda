import axios from 'axios';
import React from 'react';
import { connect } from 'react-redux';

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
    console.log('Trying to get AI views from server');

    try {
      const response = await axios.get('/api/ai-views');

      if (response.data.error) {
        console.log(`An error occured getting AI views back from the server: ${response.data.error}`);
        this.setState({
          error: true
        });
      } else {
        console.log('AI views response:', response.data);

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
    console.log('Entry ID', entryId);
    const entry = document.querySelector(`#${entryId}`);
    entry.classList.add('chat__ai-views__views__view__entry--hidden');
    
    setTimeout(() => { entry.classList.add('d-none'); }, 1000);
  };
  
  componentDidMount() {
    this.getViews();
  }

  renderAiView(aiView) {
    return aiView.messages.map((message, index) => {
      return (
        <div key={index} id={`chat__ai-views__views__view__entry__${index}`} className="chat__ai-views__views__view__entry" onClick={ event => this.addMessageToTextArea(`chat__ai-views__views__view__entry__${index}`, message) }>
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
            You'll just be '{this.state.name} from {this.state.countryName}'
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
              Will you share your views <strong><a href="/wall" target="_blank">on my wall</a></strong> to help change AI? Tap to add and/or type below
            </div>
          </div>
          { this.renderUserDetails() }
        </div>
        
        <div className="chat__ai-views__views">
          { this.state.aiViews ? this.renderAiViews() : (this.state.error ? 'Sorry, I couldn\'t load your views' : 'Loading...') }
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

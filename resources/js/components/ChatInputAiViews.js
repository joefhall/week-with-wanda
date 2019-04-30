import React from 'react';
import { connect } from 'react-redux';

class ChatInputAiViews extends React.Component {
  state = {
    comment: null,
    countryName: null,
    errorMessage: '',
    hasError: false,
    inputText: '',
    name: null,
    token: document.head.querySelector('meta[name="csrf-token"]').content
  };

  validate = () => {
    const input = document.querySelectorAll('.chat__input__form__input')[0];
    
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (this.props.minLength && input.value.length < this.props.minLength) {
      this.setState({
        errorMessage: 'Please say a little more',
        hasError: true
      });
    }
  };

  onChange = event => {
    this.setState({inputText: event.target.value});
    if (this.props.onChange) {
      this.props.onChange(event);
    }
    
    this.validate();
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.setState({
      comment: document.querySelector('.chat__input__form__input').value,
      countryName: this.props.user.countryName,
      name: this.props.user.name
    });
    
    this.validate();
    
    if (!this.state.errorMessage) {
      setTimeout(() => { document.querySelector('#hidden-form').submit() }, 1000);
    }
  };

  render() {    
    return (
      <div>
        <form onSubmit={this.onFormSubmit} >
          <div className={(this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
            {this.state.errorMessage}
          </div>
          <div className="chat__input__form">
            <textarea rows={this.props.rows} className="chat__input__form__input" placeholder={this.props.placeholder}></textarea>
            <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} onClick={this.onFormSubmit}></i>
          </div>
          <div className="chat__input__form__skip">
            <a href="/wall">I don't want to share anything</a>
          </div>
        </form>

        <form id="hidden-form" className="d-none" action="/wall/create" method="post">
          <input type="hidden" name="_token" value={this.state.token} />
          <input type="hidden" name="countryName" value={this.state.countryName ? this.state.countryName : 'Somewhere'} />
          <input type="hidden" name="name" value={this.state.name ? this.state.name : 'Anon'} />
          <input type="hidden" name="comment" value={this.state.comment ? this.state.comment : ''} />
        </form>
      </div>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    user: state.user
  };
};

export default connect(mapStateToProps, {})(ChatInputAiViews);

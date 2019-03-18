import React from 'react';
import PhoneInput from 'react-phone-number-input';
import { isValidPhoneNumber } from 'react-phone-number-input/mobile';

export default class ChatInputPhone extends React.Component {
  state = {
    errorMessage: '',
    hasError: false,
    inputValue: ''
  };

  onChange = value => {
    this.setState({inputValue: value});
    
    this.validatePhoneNumber(value);
    
    if (this.props.onChange) {
      this.props.onChange(event);
    }
  };

  onFormSubmit = event => {
    event.preventDefault();
    
    this.validatePhoneNumber(this.state.inputValue);
    
    if (!this.state.errorMessage) {
      this.props.onFormSubmit(this.state.inputValue);
    }
  };

  validatePhoneNumber = phoneNumber => {
    this.setState({
      errorMessage: '',
      hasError: false
    });
    
    if (!phoneNumber) {
      this.setState({
        errorMessage: 'Please enter your mobile number',
        hasError: false
      });
    } else if (isValidPhoneNumber(phoneNumber)) {
      this.setState({
        errorMessage: '',
        hasError: false
      });
    } else {
      this.setState({
        errorMessage: 'Please make sure your mobile number is correct',
        hasError: true
      });
    }
  };
  
  componentDidMount() {
    document.querySelector('.react-phone-number-input__phone').focus();
    this.validatePhoneNumber(null);
  }

  render() {
    return (
      <div>
        <div className={(this.state.errorMessage ? '' : 'd-none ') + (this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <form className="chat__input__form" onSubmit={this.onFormSubmit}>
          <PhoneInput
            inputClassName="chat__input__form__input"
            country={document.querySelector('#country-code').dataset.country.toUpperCase()}
            countryOptions={['US', 'CA', 'AU', 'GB', 'FR', 'IT', 'BE', 'NL', 'DE']}
            international={false}
            limitMaxLength={true}
            onChange={value => this.onChange(value)}
          />
          <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} onClick={this.onFormSubmit}></i>
        </form>
      </div>
    );
  }
};

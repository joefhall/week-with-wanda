import React from 'react';
import PhoneInput from 'react-phone-number-input';
import { isValidPhoneNumber } from 'react-phone-number-input/mobile';

export default class ChatInputPhone extends React.Component {
  state = {
    errorMessage: '',
    hasError: false,
    inputValue: ''
  };

  onBlur = event => {
    if (this.props.onBlur) {
      this.props.onBlur(event);
    }
  };

  onChange = value => {
    this.setState({inputValue: value});
    
    this.validatePhoneNumber(value);
    
    if (this.props.onChange) {
      this.props.onChange(event);
    }
  };

  onFocus = event => {
    if (this.props.onFocus) {
      this.props.onFocus(event);
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

  componentWillUnmount() {
    if (this.props.onBlur) {
      this.props.onBlur();
    }
  }

  render() {
    let country = document.querySelector('#country-code').dataset.country.toUpperCase();
    if (country === 'XX') {
      country = 'US';
    }
    
    return (
      <div>
        <div className={(this.state.errorMessage ? '' : 'd-none ') + (this.state.hasError ? 'chat__input__form__error-message--has-error ' : '') + 'chat__input__form__error-message'}>
          {this.state.errorMessage}
        </div>
        <form className="chat__input__form" onSubmit={this.onFormSubmit}>
          <PhoneInput
            inputClassName="chat__input__form__input"
            country={country}
            countryOptions={['US', 'CA', 'AU', 'GB', 'FR', 'IT', 'BE', 'NL', 'DE']}
            international={false}
            limitMaxLength={true}
            onBlur={event => this.onBlur(event)}
            onFocus={event => this.onFocus(event)}
            onChange={value => this.onChange(value)}
          />
          <i className={(this.props.hideButton ? 'invisible ' : '') + 'chevron circle right icon chat__input__form__submit-button'} onClick={this.onFormSubmit}></i>
        </form>
      </div>
    );
  }
};

import React from 'react';
import { connect } from 'react-redux';

class DoPasswordResetHidden extends React.Component {
  state = {
    csrfToken: document.head.querySelector('meta[name="csrf-token"]').content,
    passwordResetToken: document.head.querySelector('meta[name="password-reset-token"]').content
  };
  
  componentDidMount() {
    document.querySelector('#hidden-password-reset-form').submit();
  }
  
  render() {
    return (
      <form id="hidden-password-reset-form" method="POST" action="/password/reset">
        <input type="hidden" name="_token" value={this.state.csrfToken} />
        <input type="hidden" name="token" value={this.state.passwordResetToken} />
        <input type="hidden" name="email" value={this.props.user.email} />
        <input type="hidden" name="password" value={this.props.user.password} />
        <input type="hidden" name="password_confirmation" value={this.props.user.password} />
      </form>
    );
  }
};

const mapStateToProps = (state) => {
  return {
    input: state.input,
    user: state.user
  };
};

export default connect(mapStateToProps, {})(DoPasswordResetHidden);

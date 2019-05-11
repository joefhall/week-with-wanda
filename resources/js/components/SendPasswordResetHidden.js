import React from 'react';
import { connect } from 'react-redux';

class SendPasswordResetHidden extends React.Component {
  state = { token: document.head.querySelector('meta[name="csrf-token"]').content };
  
  componentDidMount() {
    document.querySelector('#hidden-send-password-reset-form').submit();
  }
  
  render() {
    return (
      <form id="hidden-send-password-reset-form" method="POST" action="/password/email">
        <input type="hidden" name="_token" value={this.state.token} />
        <input type="hidden" name="email" value={this.props.user.email} />
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

export default connect(mapStateToProps, {})(SendPasswordResetHidden);

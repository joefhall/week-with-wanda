import React from 'react';
import { connect } from 'react-redux';

class LoginHidden extends React.Component {
  state = { token: document.head.querySelector('meta[name="csrf-token"]').content };
  
  componentDidMount() {
    if (document.head.querySelector('meta[name="logged-in"]').content === 'true') {
      this.props.followUpAction(Object.keys(this.props.input.userInput)[0], '');
    } else {
      window.navigationOccurred = true;
      document.querySelector('#hidden-login-form').submit();
    }
  }
  
  render() {
    return (
      <form id="hidden-login-form" method="POST" action="/login">
        <input type="hidden" name="_token" value={this.state.token} />
        <input type="hidden" name="email" value={this.props.user.email} />
        <input type="hidden" name="password" value={this.props.user.password} />
        <input type="checkbox" name="remember" checked className="d-none" />
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

export default connect(mapStateToProps, {})(LoginHidden);

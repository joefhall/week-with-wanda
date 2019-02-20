import React from 'react';
import FacebookLogin from 'react-facebook-login';

const config = require('../config.json');

export default class LoginFacebook extends React.Component {
  facebookResponse = (response) => {
    console.log(response);
    
//     const tokenBlob = new Blob([JSON.stringify({access_token: response.accessToken}, null, 2)], {type : 'application/json'});
//     const options = {
//       method: 'POST',
//       body: tokenBlob,
//       mode: 'cors',
//       cache: 'default'
//     };
//     fetch('https://weekwithwanda.com/api/v1/auth/facebook', options).then(r => {
//       const token = r.headers.get('x-auth-token');
//       r.json().then(user => {
//         if (token) {
//           this.setState({isAuthenticated: true, user, token})
//         }
//       });
//     })
  };

  onFailure = (error) => {
    console.log(error);
  };
  
  renderContent = () => {
//     if (!!this.state.isAuthenticated) {
//       return (
/*        <div>
          <p>Authenticated</p>
          <div>
            {this.state.user.email}
          </div>
          <div>
            <button onClick={this.props.logout} className="button">
              Log out
            </button>
          </div>
        </div> */
//       );
//     } else {
      return (
        <div>
          <FacebookLogin
            appId={config.FACEBOOK_APP_ID}
            autoLoad={false}
            fields="name,email,picture"
            callback={this.facebookResponse}
          />
        </div>
      );
//     }
  };
  
  render() {
    return (
      <div>
        {this.renderContent()}
      </div>
    );
  }
};

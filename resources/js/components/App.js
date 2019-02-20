import React from 'react';
import Chat from './Chat';
import Login from './Login';
import LoginFacebook from './LoginFacebook';
import Register from './Register';

export default class App extends React.Component {
  state = {
    isAuthenticated: false,
    isLoggedIn: false,
    token: '',
    user: null
  };

  loginUser = (email, password) => {
//     $("#login-form button")
//       .attr("disabled", "disabled")
//       .html(
//         '<i class="fa fa-spinner fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span>'
//       );
    let formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);

    axios
      .post('https://weekwithwanda.com/api/user/login/', formData)
      .then(response => {
        console.log(response);
        return response;
      })
      .then(json => {
        if (json.data.success) {
          console.log("Login successful!");

          let userData = {
            name: json.data.data.name,
            id: json.data.data.id,
            email: json.data.data.email,
            auth_token: json.data.data.auth_token,
            timestamp: new Date().toString()
          };
          
          let appState = {
            isLoggedIn: true,
            user: userData
          };
          
          // save app state with user date in local storage
          localStorage["appState"] = JSON.stringify(appState);
          
          this.setState({
            isLoggedIn: appState.isLoggedIn,
            user: appState.user
          });
        } else {
          console.log("Login failed!");
        }

//         $("#login-form button")
//           .removeAttr("disabled")
//           .html("Login");
      })
      .catch(error => {
        console.log(`An error occured! ${error}`);
      
//         $("#login-form button")
//           .removeAttr("disabled")
//           .html("Login");
      });
  };

  registerUser = (name, email, password) => {
//       $("#email-login-btn")
//         .attr("disabled", "disabled")
//         .html(
//           '<i class="fa fa-spinner fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span>'
//         );

      let formData = new FormData(); 
      formData.append("password", password);
      formData.append("email", email);
      formData.append("name", name);

      console.log('Sending request to register user');
      axios
        .post('https://weekwithwanda.com/api/user/register', formData)
        .then(response => {
          console.log(response);
          return response;
        })
        .then(json => {
          if (json.data.success) {
            console.log('Registration successful!');

            let userData = {
              name: json.data.data.name,
              id: json.data.data.id,
              email: json.data.data.email,
              auth_token: json.data.data.auth_token,
              timestamp: new Date().toString()
            };
            
            let appState = {
              isLoggedIn: true,
              user: userData
            };
            
            // save app state with user date in local storage
            localStorage["appState"] = JSON.stringify(appState);
            
            this.setState({
              isLoggedIn: appState.isLoggedIn,
              user: appState.user
            });
          } else {
            console.log(`Registration failed!`);
//             $("#email-login-btn")
//               .removeAttr("disabled")
//               .html("Register");
          }
        })
        .catch(error => {
          console.log("An error occured!");
          console.log(`${formData} ${error}`);
//           $("#email-login-btn")
//             .removeAttr("disabled")
//             .html("Register");
        });
    };

  logoutUser = () => {
    let appState = {
      isAuthenticated: false,
      isLoggedIn: false,
      token: '',
      user: {}
    };
    
    // save app state with user date in local storage
    localStorage['appState'] = JSON.stringify(appState);
    this.setState(appState);
  };

  componentDidMount() {
    let state = localStorage['appState'];
    if (state) {
      let AppState = JSON.parse(state);
      console.log(AppState);
      this.setState({ isLoggedIn: AppState.isLoggedIn, user: AppState });
    }
  }
  
  render() {
    return (
      <div>
        {/* <LoginFacebook logout={this.logout} /> */}
        {/* <Login logout={this.logout} /> */}
        <Register registerUser={this.registerUser} />
        <Chat />
      </div>
    );
  }
}

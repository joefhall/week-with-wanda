import React from "react";

const Login = () => {
  let email, password;
  const handleLogin = e => {
    e.preventDefault();
//     loginUser(email.value, password.value);
  };
  return (
    <div id="main">
      <form id="login-form" action="" onSubmit={handleLogin} method="post">
        <h3 style={{ padding: 15 }}>Login Form</h3>
        <input ref={input => (email = input)} autoComplete="off" id="email-input" name="email" type="text" className="center-block" placeholder="email" />
        <input ref={input => (password = input)} autoComplete="off" id="password-input" name="password" type="password" className="center-block" placeholder="password" />
        <button type="submit" className="landing-page-btn center-block text-center" id="email-login-btn" href="#facebook" >
          Login
        </button>
      </form>
    </div>
  );
};

export default Login;

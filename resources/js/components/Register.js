import React from "react";

const Register = () => {
  let email, password, name;

  const handleLogin = e => {
    e.preventDefault();

    console.log('Trying to register user');
//     registerUser(name.value, email.value, password.value);
  };
  return (
    <div id="main">
      <form id="login-form" action="" onSubmit={handleLogin} method="post">
        <h3 style={{ padding: 15 }}>Register Form</h3>
        <input ref={input => (name = input)} autoComplete="off" id="name-input" name="name" type="text" className="center-block" placeholder="Name" />
        <input ref={input => (email = input)} autoComplete="off" id="email-input" name="email" type="text" className="center-block" placeholder="email" />
        <input ref={input => (password = input)} autoComplete="off" id="password-input" name="password" type="password" className="center-block" placeholder="password" />
        <button type="submit" className="landing-page-btn center-block text-center" id="email-login-btn" href="#facebook" >
          Register
        </button>

      </form>
    </div>
  );
};

export default Register;

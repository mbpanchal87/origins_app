<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration Form</title>
  <style>
    /* Reset */
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #333;
    }

    .main {
      background: #fff;
      width: 360px;
      padding: 30px 35px;
      border-radius: 18px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
      text-align: center;
    }

    .main h2 {
      color: #4caf50;
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    label {
      display: block;
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 8px;
      color: #444;
      user-select: none;
      text-align: left;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: 1.8px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #4caf50;
      outline: none;
      box-shadow: 0 0 8px rgba(76, 175, 80, 0.4);
    }

    button[type="submit"] {
      width: 100%;
      padding: 15px;
      background-color: #4caf50;
      border: none;
      border-radius: 12px;
      color: #fff;
      font-size: 17px;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s ease;
      user-select: none;
      box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
    }

    button[type="submit"]:hover {
      background-color: #388e3c;
      box-shadow: 0 6px 20px rgba(56, 142, 60, 0.5);
    }

    .login-link {
      margin-top: 25px;
      font-size: 14px;
      color: #555;
      user-select: none;
    }

    .login-link a {
      color: #4caf50;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .login-link a:hover {
      text-decoration: underline;
      color: #388e3c;
    }
  </style>
</head>

<body>
  <div class="main">
    <h2>Registration Form</h2>
    <form method="POST" action="/signup">
      @csrf
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname" required />

      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />

      <button type="submit">Submit</button>
    </form>
    <div class="login-link">
      <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
  </div>
</body>

</html>

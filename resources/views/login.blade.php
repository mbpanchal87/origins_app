<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Form</title>
  <style>
    /* Reset some defaults */
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

    .login-container {
      background: #fff;
      padding: 35px 30px;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 28px;
      color: #222;
      letter-spacing: 1px;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #555;
      font-size: 14px;
      user-select: none;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 15px;
      border: 1.8px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }

    .btn {
      width: 100%;
      padding: 14px;
      background: #007bff;
      border: none;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      user-select: none;
    }

    .btn:hover {
      background: #0056b3;
    }

    .forgot-password {
      text-align: right;
      margin-top: 8px;
    }

    .forgot-password a {
      color: #007bff;
      text-decoration: none;
      font-size: 13px;
      user-select: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    .create-user {
      margin-top: 30px;
      font-size: 15px;
    }

    .create-user a {
      color: #007bff;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
      user-select: none;
    }

    .create-user a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    /* Success message */
    .success-message {
      background: #d4edda;
      border: 1px solid #c3e6cb;
      color: #155724;
      padding: 10px 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-weight: 600;
      user-select: none;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    @if(session('success'))
    <div class="success-message">{{ session('success') }}</div>
    @endif
    <form action="/login" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
      </div>
      <button type="submit" class="btn">Login</button>

      <div class="create-user">
        <p>Don't have an account? <a href="{{ route('signup') }}">Create User</a></p>
      </div>
    </form>
  </div>
</body>

</html>

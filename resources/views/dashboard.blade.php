<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f4f8;
      margin: 40px;
      color: #333;
    }
    .container {
      max-width: 480px;
      margin: 0 auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    .logout-link {
      display: inline-block;
      background: #e74c3c;
      color: white;
      padding: 10px 25px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
      margin-bottom: 40px;
    }
    .logout-link:hover {
      background: #c0392b;
    }
    h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 50px;
      color: #2c3e50;
    }
    .btn-link {
      display: block;
      background: #3498db;
      color: white;
      text-decoration: none;
      padding: 15px 0;
      margin: 15px 0;
      border-radius: 8px;
      font-size: 18px;
      font-weight: 600;
      box-shadow: 0 5px 10px rgba(52, 152, 219, 0.4);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-link:hover {
      background: #2980b9;
      box-shadow: 0 7px 15px rgba(41, 128, 185, 0.6);
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="{{ route('logout') }}" class="logout-link">Logout</a>

    <h2>Welcome, {{ $user->firstname . ' ' . $user->lastname }}</h2>

    <a href="{{ route('create_task') }}" class="btn-link">Create Task</a>

    <a href="{{ route('task_list') }}" class="btn-link">Task List</a>
  </div>
</body>
</html>

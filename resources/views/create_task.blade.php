<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create Task</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f4f9;
      margin: 40px;
      color: #333;
    }

    .nav-links {
      display: flex;
      gap: 20px;
      margin-bottom: 40px;
    }

    .nav-links a {
      text-decoration: none;
      color: #3498db;
      font-weight: 600;
      padding: 10px 25px;
      border: 2px solid transparent;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .nav-links a:hover {
      background-color: #3498db;
      color: #fff;
      border-color: #2980b9;
    }

    .main {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
      padding: 30px 35px;
      max-width: 400px;
      margin: 0 auto;
    }

    .main h2 {
      color: #27ae60;
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 28px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 600;
      font-size: 15px;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px 15px;
      box-sizing: border-box;
      border: 1.8px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      font-family: inherit;
      transition: border-color 0.3s ease;
      resize: vertical;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus {
      border-color: #27ae60;
      outline: none;
      box-shadow: 0 0 6px rgba(39, 174, 96, 0.4);
    }

    textarea {
      min-height: 80px;
    }

    button[type="submit"] {
      width: 100%;
      padding: 15px;
      border-radius: 10px;
      border: none;
      background-color: #27ae60;
      color: white;
      cursor: pointer;
      font-size: 18px;
      font-weight: 700;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #1e8449;
    }

    h3.success-message {
      max-width: 400px;
      margin: 0 auto 30px auto;
      padding: 15px 20px;
      background-color: #d4edda;
      border: 1.5px solid #c3e6cb;
      border-radius: 8px;
      color: #155724;
      font-weight: 600;
      text-align: center;
    }
  </style>
</head>

<body>

  <nav class="nav-links">
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('logout') }}">Logout</a>
  </nav>

  @if(session('success'))
    <h3 class="success-message">{{ session('success') }}</h3>
  @endif

  <div class="main">
    <h2>Create Task</h2>
    <form method="POST" action="/create_task">
      @csrf
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required />

      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="due_date">Due Date:</label>
      <input type="text" id="due_date" name="due_date" placeholder="YYYY/MM/DD" required />

      <label for="status">Status:</label>
      <select name="status" id="status" required>
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>

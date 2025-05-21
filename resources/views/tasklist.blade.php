<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Task List</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f7f9fc;
      margin: 40px;
      color: #333;
    }
    .nav-links {
      display: flex;
      gap: 15px;
      margin-bottom: 40px;
    }
    .nav-links a {
      text-decoration: none;
      color: #3498db;
      font-weight: 600;
      padding: 10px 20px;
      border: 2px solid transparent;
      border-radius: 6px;
      transition: all 0.3s ease;
    }
    .nav-links a:hover {
      color: #fff;
      background-color: #3498db;
      border-color: #2980b9;
    }
    h1 {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 25px;
      color: #2c3e50;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
    }
    thead {
      background-color: #2980b9;
      color: white;
    }
    thead th {
      padding: 15px 20px;
      text-align: left;
      font-weight: 600;
      font-size: 16px;
    }
    tbody tr {
      border-bottom: 1px solid #ddd;
      transition: background-color 0.3s ease;
    }
    tbody tr:nth-child(even) {
      background-color: #f9fbfd;
    }
    tbody tr:hover {
      background-color: #e3f2fd;
    }
    tbody td {
      padding: 15px 20px;
      font-size: 15px;
      vertical-align: middle;
      color: #444;
    }
    a.edit-btn,
    button.delete-btn {
      padding: 7px 14px;
      border-radius: 5px;
      font-weight: 600;
      font-size: 14px;
      border: none;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.3s ease;
    }
    a.edit-btn {
      background-color: #27ae60;
      color: white;
      border: 1px solid #229954;
    }
    a.edit-btn:hover {
      background-color: #1e8449;
      border-color: #186a3b;
    }
    button.delete-btn {
      background-color: #e74c3c;
      color: white;
      border: 1px solid #c0392b;
    }
    button.delete-btn:hover {
      background-color: #c0392b;
      border-color: #922b21;
    }
    button.delete-btn:focus {
      outline: none;
      box-shadow: 0 0 5px 2px rgba(231, 76, 60, 0.7);
    }
  </style>
</head>
<body>

  <nav class="nav-links">
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('logout') }}">Logout</a>
  </nav>

  <h1>Task List</h1>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
        <tr>
          <td>{{ $task->title }}</td>
          <td>{{ $task->description }}</td>
          <td>{{ $task->due_date }}</td>
          <td>{{ ucfirst($task->status) }}</td>
          <td>
            <a href="{{ route('edittask', $task->id) }}" class="edit-btn">Edit</a>
          </td>
          <td>
            <form action="{{ route('taskdelete', $task->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button 
                type="submit" 
                onclick="return confirm('Are you sure you want to delete this task?')" 
                class="delete-btn"
              >
                Delete
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>

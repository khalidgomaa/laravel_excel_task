<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            padding: 20px;
            background-color:#C0C0C0;
        }
   

    </style>
</head>
<body>
<h1 class="text-center">User Data Management</h1>

<!-- Navigation Links -->
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.import.view') }}">Import Data</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.export.view') }}">Export Data</a>
    </li>
</ul>
@yield('content')
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
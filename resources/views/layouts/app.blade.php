<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Mi App')</title>

  <style>
    body {
      margin: 0;
      font-family: sans-serif;
    }

    .layout {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 200px;
      background-color: #333;
      color: white;
      padding: 20px;
    }

    .sidebar a {
      color: white;
      display: block;
      padding: 10px 0;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #444;
    }

    .sidebar button:hover {
      background-color: #444;
      cursor: pointer;
    }

    .sidebar .submenu a {
      font-size: 0.9em;
      padding-left: 10px;
    }


    .main {
      flex-grow: 1;
      padding: 20px;
    }

    .navbar {
      background-color: #222;
      color: white;
      padding: 15px;
    }

    .footer {
      background-color: #f1f1f1;
      padding: 15px;
      text-align: center;
    }
  </style>
</head>

<body>

  @include('components.navbar')

  <div class="layout">
    @include('components.sidebar')

    <div class="main">
      @yield('content')
    </div>
  </div>

</body>

</html>
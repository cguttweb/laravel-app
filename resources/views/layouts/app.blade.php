<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Laravel App</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-600">
  <nav class="bg-white flex justify-between p-4 mb-3">
    <ul class="flex items-center">
      <li class="p-3"><a href="#">Home</a></li>
      <li class="p-3"><a href="#">Dashboard</a></li>
      <li class="p-3"><a href="#">Posts</a></li>
    </ul>

    <ul class="flex items-center">

      @auth
        <li class="p-3"><a href="">Chloe</a></li>
        <li class="p-3"><a href="#">Logout</a></li>
      @endauth

      @guest
        <li class="p-3"><a href="{{ route('login') }}">Login</a></li>
        <li class="p-3"><a href="{{ route('register') }}">Register</a></li>
      @endguest
    </ul>
  </nav>
  @yield('content')
</body>
</html>
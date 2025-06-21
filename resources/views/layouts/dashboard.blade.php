<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Dashboard')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
</head>
<body>
  <!-- أضف هذا في مكان مناسب داخل الصفحة -->
<div class="page-loader" id="pageLoader">
  <div></div>
  <div></div>
  <div></div>
</div>
  @yield('content')
</body>
</html>

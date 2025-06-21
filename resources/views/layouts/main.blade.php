<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Emad AlHashash')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->

    <!-- font-awesome -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/style.css', 'resources/css/login.css', 'resources/js/main.js'])
</head>

<body class="@yield('body-class', 'default-body')">

    @yield('content')

    <!-- js -->

</body>

</html>

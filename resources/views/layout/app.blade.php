<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

<title>@yield('title')</title>

</head>
<body>
@yield('content')
<li class="nav-item">
    <a class="nav-link" href="{{ route('notifications.index') }}">Notifications</a>
</li>

</body>
</html>

<html>
<head>
  <meta charset="UTF-8">
  <title></title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<header>
  @include ('layouts.header')
</header>

@yield('content')

<footer>
<p>
  To jest footer! 
  @include ('layouts.footer')
  </p>
</footer>
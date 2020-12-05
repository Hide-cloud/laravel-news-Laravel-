<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--<link rel='stylesheet' href='./css/index.css' type="text/css">-->
  <link rel='stylesheet' href="{{ asset('css/index.css') }}" type="text/css">
  <title>Laravel news</title>
</head>

<body>
  <h1 class='title'>Laravel News</h1>

  @yield('content')

  <script type="text/javascript" src="./js/index.js"></script>
</body>

</html>
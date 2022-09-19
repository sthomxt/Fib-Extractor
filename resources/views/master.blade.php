<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css'); }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body class="p5">
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js'); }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js'); }}"></script>
  <!-- with URL -->
  <script type="text/javascript" src="{{ URL::asset('js/main.js'); }}"></script>
  <div class="container">
      <h1 class="">Fibonacci Extractor</h1>
      <div class="p-1 mb-1 bg-gray text-white">&nbsp;</div>
      <div class="row">
          <div class="col-md-9">
              <p>@yield('content')</p>
          </div>
      </div>
  </div>
</body>
</html>
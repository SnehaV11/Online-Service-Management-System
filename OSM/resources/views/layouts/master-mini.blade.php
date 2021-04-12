<!DOCTYPE html>
<html>
<head>
  <title>Online Service Management System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  <!-- end plugin css -->
  <!-- common css -->
  {!! Html::style('css/style.css') !!}

</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      @yield('content')
    </div>
  </div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Online Service Management System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  <script src="style.js"></script>
  {!! Html::style('css/style.css') !!}
  {!! Html::script('js/style.js') !!}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layouts.header')
    <div class="">
      @include('layouts.sidebarAdmin')
      
      </div>
      <div class="main-panel">
        
        @include('layouts.footer')
    </div>
    <div class="card-position">
          @yield('content')
        </div>
  </div>

  <!-- base js -->

  <!-- end common js -->

  @stack('custom-scripts')
</body>
</html>
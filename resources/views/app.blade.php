<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
</head>
<body>
  <div class="container">
    <!-- @include('partials.flash') -->
    @include('flash::message')


    @yield('content')
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <script type="text/javascript">
    $('#flash-overlay-modal').modal();
    // $('div.alert').not('.alert-important').delay(3000).slideUp(300);
  </script>
  @yield('footer')
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" type="image/png" href="http://awsd4bb9323.bitnamiapp.com/visate/public/assets/images/favicon.png"/>
  <title>VISATE</title>
  
  {{ HTML::style('assets/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/bootstrap-datepicker.min.css') }}
  {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css') }}
  {{ HTML::style('assets/css/estiloTabs.css') }}
  {{ HTML::style('assets/css/style.css') }}
  {{ HTML::style('assets/css/font-awesome.min.css') }}

</head>
<body>


    {{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('assets/js/moment.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/bootstrap-datepicker.min.js') }}
    {{ HTML::script('assets/js/bootstrap-datetimepicker.min.js') }}
    {{ HTML::script('assets/js/es.js') }}

    <div class="container-fluid content">
      <div class="side-body">
        @yield('content')
      </div>
    </div>
</body>
</html>
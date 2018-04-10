<html> 
  <head> 
    <title> @yield('title') </title> 
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap-theme.min.css')}}">
  
  </head>
  <body>
  
    @include('shared.navbar')
    
    @yield('content')
    
    <script src="{{URL::asset('vendor/jquery.min.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  </body> 
 </html>
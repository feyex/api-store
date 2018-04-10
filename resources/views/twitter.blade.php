<html> 
<head>
 <title>TWITTER</title> 
 	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> 
 	<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}"> 
	<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap-theme.min.css')}}">

		<style>
			body { 
				margin: 0; 
				padding: 0;
				width: 100%; 
				height: 100%; 
				color: #B0BEC5; 
				display: table; 
				font-weight: 100; 
				font-family: 'Lato'; 
			} 
			
			.container {
				text-align: center; 
				display: table-cell;
				vertical-align: middle; 
			} 
			
			.content { 
				text-align: center;
				display: inline-block; 
			} 

			.title { 
					font-size: 96px; 
					margin-bottom: 40px; 
							} 
				.quote { 
						font-size: 24px; 
											} 

		</style>
   
	</head>
	<body>
		@extends('master')
		@section('title', 'twitter')

		@section('content')
		<div class="container">
			<div class="content"> 
				<div class="title">Home Page</div> 
				<div class="quote">Our Home page!</div> 
			</div>
		</div> 
		@endsection
		
		<script src="{{URL::asset('vendor/jquery.min.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	</body>
</html>
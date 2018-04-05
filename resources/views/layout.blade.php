<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
      	
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		
		<title>* TP ORM || SAP *</title>
</head>

<body>
	<section>
		@yield('content')
	</section>
	<script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>			
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>

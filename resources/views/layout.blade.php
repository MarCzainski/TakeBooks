<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Take Books - internetowa księgarnia</title>
	<link rel="stylesheet" type="text/css" href="css/app.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>
	        Take Books - online bookstore
		</h1>

		<div class="links">
		    <a href=" {{ url('') }}">Home Page</a>
		    <a href=" {{ url('about') }}">About Me</a>
		    <a href=" {{ url('book') }}">All Books</a>
		</div>

		@yield('content')

	</div>
</body>
</html>
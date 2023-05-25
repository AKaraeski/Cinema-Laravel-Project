<!DOCTYPE html>
<html>
<head>
	<title>Cinema Booking Website</title>
    <link rel="icon" href="img/logo 104.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @stack('styles')
</head>
<body>
	<header>
		<div class="image">
			<img src="{{ asset('img/logo 103.png') }}" alt="logo">
		</div>
		<nav>
			<ul>
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('movies.index') }}">Movies</a></li>
				<li><a href="{{ route('cinemas.index') }}">Cinemas</a></li>
				<li><a href="{{ route('contact.index') }}">Contact Us</a></li>
			</ul>
		</nav>
	</header>
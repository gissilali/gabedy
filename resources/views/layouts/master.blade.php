<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.svg') }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-mods.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
	<div id="app">
		@include('partials.slideout-menu')
		@yield('content')
		@yield('footer')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
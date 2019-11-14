<!doctype html>
<html>
	<head>
		<title>@yield('simple task management laravel app')</title>
		@include('layouts.head')
	</head>

	<body>
		<div class='container'>
			@yield('content')
		</div>
		@include('layouts.js')
	</body>
</html>
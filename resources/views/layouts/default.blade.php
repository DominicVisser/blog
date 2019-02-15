<!DOCTYPE html>
<html>
<head>
	<style type="text/css" href="css/app.css"></style>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	@yield('header')

	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	@yield('script')

</body>
</html>
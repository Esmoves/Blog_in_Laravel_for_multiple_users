<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
	@include('layout.htmlheader')
	@include('layout.nav')

	@yield('content')
	
	@include('layout.footer')

</body>
</html>
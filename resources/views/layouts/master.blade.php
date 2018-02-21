<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
	@include('layouts.htmlheader')
	@include('layouts.nav')

	@yield('content')
	
	@include('layouts.footer')

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="header" >
			
		@include('layouts.htmlheader')
		
		@include('layouts.nav')
			
		</div>



		<div class="content">

			@yield('content')

		</div>

		@include('layouts.footer')

	</div>

		<div class="sidebar" >

			@include('layouts.sidebar')

		</div> 

</body>
</html>

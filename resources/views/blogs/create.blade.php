@extends ('/layouts.master')

@section('content')
	<h1>Add an Article</h1>
	<form action="/blogs" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
		<div>
			<label for="name">Title:</label>
			<input type="text" id="title" name="title">
		</div>
		<div>
			<label for="name">Excerp:</label> 
			<input type="textarea" id="excerp" name="excerp">
		</div>
		<div>
			<label for="name">Text:</label> 
			<input type="textarea" id="text" name="text">
		</div>	
		<div class="btn">
			<button type="submit">Add Blog</button>
		</div>	
	</form>

@endsection	
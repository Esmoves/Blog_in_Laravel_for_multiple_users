@extends ('/layouts.master')

@section('content')
	<h1>Add an Article</h1>
	<form action="/blogs" method="post">
			{{ csrf_field() }}
			<input type="hidden" id="user_id" name="user_id" value="1">
			<input type="hidden" id="image" name="image" value="12345">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" id="titel" name="titel" class="form-control">
			</div>
			<div class="form-group">
				<label for="excerp">Excerp:</label> 
				<input type="textarea" id="excerp" name="excerp" class="form-control">
			</div>
			<div class="form-group">
				<label for="body">Text:</label> 
				<input type="textarea" id="body" name="body" class="form-control">
			</div>	
			<div class="btn">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>	
	</form>

@endsection	
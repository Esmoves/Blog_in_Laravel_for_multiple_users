@extends ('./layouts.master')

@section ('content')
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

		  	<label for="category">Category</label>
		  	<select type="array" class="form-control" id="category_id[]" name="category_id[]" multiple>

						@foreach ($categories as $category)

						<option value="{{ $category->id }}">{{ $category->name }}</option>

		  		@endforeach

				</select>

			</div>

			<div class="form-group">
				<label for="excerp">Excerp:</label>
				<input type="textarea" id="excerp" name="excerp" class="form-control">
			</div>
			<div class="form-group">
				<label for="body">Text:</label>
				<input type="textarea" id="body" name="body" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>
		@include('layouts.errors')
	</form>



@endsection

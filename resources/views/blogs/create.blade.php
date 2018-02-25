@extends ('./layouts.master')

@section ('content')

<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
					Add an Article</h3>

			<form action="/blogs" method="post">
					{{ csrf_field() }}

					<div class="form-group">

				  	<label for="user_id">Author</label>
				  	<select type="array" class="form-control" id="user_id" name="user_id">

								@foreach ($authors as $author)

								<option value="{{ $author->id }}">{{ $author->username }}</option>

				  		@endforeach

						</select>

					</div>
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

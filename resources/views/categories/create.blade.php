@extends ('./layouts.master')

@section ('content')

<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
					Add a Category</h3>

			<p>Current Categories:</p>
			<ul>
				@foreach ($categories as $category)

					<li>{{ $category->name }}</li>

			  	@endforeach
			</ul>
					
			<form action="/categories" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">New Category:</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				@include('layouts.errors')
			</form>



@endsection

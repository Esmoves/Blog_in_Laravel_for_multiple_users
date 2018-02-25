@extends ('./layouts.master')

@section ('content')
<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
					Register Author
			</h3>

			<form method="POST" action="/register">
				{{ csrf_field() }}

				<div class='form-group'>
						<label>User name: </label>
						<input type="text" name="username" class="form-control" required>
				</div>
				<div class='form-group'>
							<label>First name: </label>
							<input type="text" name="firstname" class="form-control" required>
				</div>
				<div class='form-group'>
							<label>Last name: </label>
							<input type="text" name="lastname" class="form-control" required>
				</div>
				<div class='form-group'>
							<label>Email: </label>
							<input type="email" name="email" class="form-control" required>
				</div>
				<div class='form-group'>
							<label>Password: </label>
							<input type="password" name="password" class="form-control" required>
				</div>
				<div class='form-group'>
							<label for="password_confirmation">Confirm Password: </label>
							<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
				</div>
				<div class='form-group'>
							<input type="submit" name="submit" class="btn btn-primary" value="Register">
				</div>
			</form >

		@include('layouts.errors')
	</div>
</div>
</main>

	@endsection

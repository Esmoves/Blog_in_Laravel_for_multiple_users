@extends ('./layouts.master')

@section ('content')
<div>
	<h1>register Author</h1>
	<div class="form-group">

		<form method="POST" action="/register">
			{{csrf_field()}}


			<label>User name: </label>
			<input type="text" name="username"><label>

				<label>First name: </label>
				<input type="text" name="firstname">

				<label>Last name: </label>
				<input type="text" name="lastname">

				<label>Email: </label>
				<input type="text" name="email">

				<label>Password: </label>
				<input type="password" name="password">

				<label>Password conformation: </label>
				<input type="password" name="password_confirmation">

				<input type="submit" name="submit">
			</form >
		</div>
		<div>
			
			@include('layouts.errors')

		</div>
	</div>

	@endsection

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

			<label>email: </label>
			<input type="text" name="email">

			<label>password: </label>
			<input type="password" name="password">

			<input type="submit" name="submit">
		</form >
		</div>

	</div>

	@endsection

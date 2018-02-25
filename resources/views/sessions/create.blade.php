 @extends ('./layouts.master')

 @section ('content')

 <main role="main" class="container">
  <div class="row">
    <div class="col-md-10 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
      Register Author</h3>

      <form method="POST" action="/register">
          {{csrf_field()}}


          <label>User name: </label><br />
          <input class="form-control" type="text" name="username" required><br />

          <label>First name: </label><br />
          <input class="form-control" type="text" name="firstname" required><br />

          <label>Last name: </label><br />
          <input class="form-control" type="text" name="lastname" required><br />

          <label>email: </label><br />
          <input class="form-control " type="email" name="email" required><br />

          <label>password: </label><br />
          <input class="form-control" type="password" name="password" required><br />

          <label>password: </label><br />
          <input class="form-control" type="password" name="password_confirmation" required><br />


          <input class="form-control" type="submit" name="submit">
      </form >
  </div>
  @include('layouts.errors')
</div>


@endsection



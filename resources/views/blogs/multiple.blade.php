@extends ('/layouts.mastermultiple')

@section('content')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-10 blog-main">

        @foreach ($blogs as $blog)
          <div class="blog-post">
            <h2 class="blog-post-title">

              <a href="/blogs/{{ $blog->id }}">

            	{{ $blog->titel }}

              </a>
            </h2>

            <p class="blog-post-meta"> updated at ...





            </p>

            {{ $blog->excerp }}

           </div>

        @endforeach


          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->



@endsection

@extends ('/layouts.master')

@section('content')
	
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">BaEs blog</h1>
          <p class="lead my-3">Welcome on this blog for and by developers. Stay tuned!</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

    <main role="main" class="container">
      
      <div class="row">
        <div class="col-md-8 blog-main">

        @foreach ($blogs as $blog)
          <div class="blog-post">
            <h2 class="blog-post-title">

              <a href="/blogs/{{ $blog->id }}">

            	{{ $blog->titel }}

              </a>
            </h2>

            <p class="blog-post-meta">updated at

            {{ $blog->updated_at->toFormattedDateString() }} 

            <br />

            <a href="#">Bart & Esmo</a>

            </p>
           
            {{ $blog->excerp }}
        
            {{ $blog->body }}

           </div> 

        @endforeach
            

          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

  

@endsection

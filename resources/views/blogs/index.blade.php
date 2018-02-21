@extends ('/layouts.master')

@section('content')
	
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Sticky blogpost by Esmo and Bart</h1>
          <p class="lead my-3">Welcome on this blog for and by developers. We will decode our work to regular language for you to read. Stay tuned!</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

    <main role="main" class="container">
      
      <div class="row">
        <div class="col-md-8 blog-main">
          tekst from blogs 
          blogs blogs 

        @foreach ($blogs as $blog)
          <div class="blog-post">
            <h2 class="blog-post-title">
            	{{ $blog->title }}</h2>
            <p class="blog-post-meta">
            {{ $blog->datum }} <a href="#">Mark</a></p>
            <p>
            {{ $blog->excerp }}
        </p><p>
            {{ $blog->body }}
        @endforeach
            

          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

  

@endsection

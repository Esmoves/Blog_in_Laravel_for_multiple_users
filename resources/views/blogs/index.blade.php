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

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">This blog is developed by Esmeralda Tijhoff and Bart Knot for CodeGorilla in februari 2018.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

@endsection

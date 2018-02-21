@extends ('layouts.master')

@section ('content')


	
	<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">
              {{ $blog->titel }}
            </h2>
            <p class="blog-post-meta">
              updated at

            {{ $blog->updated_at->toFormattedDateString() }} 

             <br />
             <a href="#">Bart & Esmo </a>
           </p>

            {{ $blog->excerp }}
        
            {{ $blog->body }} 
            
          </div><!-- /.blog-post -->
        </div>
    </div>
</main>

@endsection
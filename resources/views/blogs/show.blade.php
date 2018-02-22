@extends ('./layouts.master')

@section ('content')



	<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">
              {{ $blog->titel }}
            </h2>
            <p class="blog-post-meta">

							@if (count($blog->categories))
								Posted in:
								@foreach ($blog->categories as $category)

									<a href="/blogs/categories/{{ $category->name }}">

									 {{ $category->name }}

								 	</a>

									@endforeach
							@endif
							<br />

              updated at

            {{ $blog->updated_at->toFormattedDateString() }}

             <br />
             <a href="#">Bart & Esmo </a>
           </p>

            {{ $blog->excerp }}

            {{ $blog->body }}

            <hr>

            <div class="comment">

              <ul class="list-group">

              @foreach ($blog->comments as $comment)
                <li class="list-group-item">
                  <strong>

                    {{ $comment->created_at->diffForHumans() }}

                   </strong> <br />

                  {{ $comment->body }}

                </li>
              @endforeach

              </ul>
            </div>


            <br />
            <div class="card">
                <div class="card-block">

                  <form method="POST" action="/blogs/{{ $blog->id }}/comments">

                    {{ csrf_field() }}

                    <input type="hidden" id="user_id" name="user_id" value="1">

                    <div class="form-group">
                      <textarea name="body" id="body" placeholder="Your comment here." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                  </form>

                    @include ('layouts.errors')

                </div>

            </div>


          </div><!-- /.blog-post -->
        </div>
    </div>
</main>

@endsection

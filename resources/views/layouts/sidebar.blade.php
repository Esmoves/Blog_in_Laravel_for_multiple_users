<aside class="blog-sidebar">
  <div class="p-3">
    <h4 class="font-italic">About</h4>
    <p class=>This blog is developed by Esmeralda Tijhoff and Bart Knot for CodeGorilla in februari 2018.</p>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Authors</h4>
    <ol class="list-unstyled">

      @foreach ($authors as $author)

        <li>

            <a href="/blogs/authors/{{ $author }}">

              {{ $author }}

           </a>
        </li>
        @endforeach


    </ol>
  </div>

<div class="p-3">
  <h4 class="font-italic">Categories</h4>
  <ol class="list-unstyled">

    @foreach ($categories as $category)

      <li>

          <a href="/blogs/categories/{{ $category }}">

            {{ $category }}

         </a>
      </li>
      @endforeach

    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-0">
      <li><a href="#">March 2014</a></li>
      <li><a href="#">February 2014</a></li>
      <li><a href="#">January 2014</a></li>

    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Heroku</a></li>
      <li><a href="www.wijzijncodegorilla.nl" target="_blank">CodeGorilla</a></li>
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->

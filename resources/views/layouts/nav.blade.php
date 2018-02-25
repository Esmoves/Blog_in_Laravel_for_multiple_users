
<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Subscribe</a>
          <a class="p-2 text-muted" href="/categories/create">Add Category</a>
          <a class="p-2 text-muted" href="/blogs/create">Add Blog</a>
          <a class="p-2 text-muted" href="/register">Register Author</a>


          @if (Auth::check())
          	<a href="/logout" class="ml-auto">logout</a>
		 	 <a class="p-2 text-muted ml-auto" href="#">{{Auth::author()->username}}</a>    
		  @endif    
		</nav>
      </div>


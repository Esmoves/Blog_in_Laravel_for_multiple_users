@include('./layouts.htmlheader')

@include('./layouts.nav')



<div class="sidebar" >

  @include('layouts.sidebar')

</div>

<div class="content">

  @yield('content')

</div>

@include('layouts.footer')

</div>


</body>
</html>

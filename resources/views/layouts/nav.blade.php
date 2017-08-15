<div class="blog-masthead">

      <div class="container">

        <nav class="nav blog-nav">

          <a class="nav-link active" href="#">Home</a>

          <a class="nav-link" href="#">About</a>

          <a class="nav-link" href="#">Press</a>
          
          <a class="nav-link" href="#">New hires</a>

          @if(Auth::check())

          {{-- ml-auto i.e margin left auto sends the user()->name to right --}}

          	<a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
            
          @endif

        </nav>
        
      </div>

</div>


<!-- 
5 - Navbar with brand and links left, full width search form and toggler right
    The links collapse into the mobile menu
-->

{{-- <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/" class="navbar-brand">Brand</a>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar5">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <form class="ml-3 my-auto d-inline w-100">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="..."> 
              <span class="input-group-btn">
                <button class="btn btn-outline-secondary" type="button">GO</button>
              </span>
            </div>
        </form>
    </div>
</nav> --}}
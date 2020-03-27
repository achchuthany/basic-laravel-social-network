<nav class="navbar navbar-sm shadow-sm navbar-expand-lg navbar-dark bg-primary py-1">
    <div class="container">
    <a class="navbar-brand" href="{{route('dashboard')}}">Social Network</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">             
      </ul>
      <form class="form-inline my-sm-2 my-lg-0">
        @if(!Auth::user())
        <input class="form-control m-sm-2 form-control-sm shadow-sm rounded"  type="text" placeholder="Username" aria-label="Username">
        <input class="form-control m-sm-2 form-control-sm shadow-sm rounded" type="password" placeholder="Password" aria-label="Password">
        <button class="btn btn-sm btn-primary my-2 my-sm-0 shadow-sm rounded" type="submit">Sign In</button>
        @endif
      </form>
    </div>
    </div>
</nav>
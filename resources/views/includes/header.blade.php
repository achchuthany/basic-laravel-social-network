<nav class="navbar navbar-sm shadow-sm navbar-expand-lg navbar-dark bg-primary py-1">
    <div class="container">
    <a class="navbar-brand" href="{{route('dashboard')}}">Social Network</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">             
      </ul>
    <form class="form-inline my-sm-2 my-lg-0" action="{{route('signin')}}" method="post">
        @if(!Auth::user())
        <input class="form-control m-sm-2 form-control-sm shadow-sm rounded"  name="email" type="email" placeholder="E-mail" aria-label="E-mail">
        <input class="form-control m-sm-2 form-control-sm shadow-sm rounded" name="password" type="password" placeholder="Password" aria-label="Password">
        <button class="btn btn-sm btn-primary my-2 my-sm-0 shadow-sm rounded" type="submit">Sign In</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
        @endif
        @if(Auth::user())
        <ul class="navbar-nav mr-auto">   
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->first_name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('signout')}}">Signout</a>
            </div>
          </li>   
        </ul>
        @endif
      </form>
    </div>
    </div>
</nav>
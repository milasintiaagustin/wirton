<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
       <!-- show app name -->
       {{ config('app.name') }}
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
       <i class="fas fa-bars"></i>
    </button>


    <div class="dropdown">
        <a class="nav-link dropdown-toggle" id="language" href="#" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
             {{-- <i class="fas fa-globe"></i> --}}
             <!-- lang:id -->
             <i class="flag-icon flag-icon-id"></i>
             <!-- lang:en -->
             <i class="flag-icon flag-icon-gb"></i>
          </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>


</nav>

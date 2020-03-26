<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    @if(session()->has('success'))
    <div class="alert" style="position:absolute;
      top:0;
      margin-left: 40%;
      z-index: 1000;
      padding: 20px auto;
      background-color: green;
      color: white;">
     <span class="closebtn" style="
     margin-left: 15px;
     color: white;
     font-weight: bold;
     float: right;
     font-size: 22px;
     line-height: 20px;
     cursor: pointer;
     transition: 0.3s;
     color: black;
    " onclick="this.parentElement.style.display='none';">&times;</span>
     <strong>Success!</strong>
          {{ session()->get('success') }}
        </div>
        @endif
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @foreach($profil as $profil1)
          <p> {{$profil1->username}}
              <span class="ml-2">
                <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" style="max-width:30px">
              </span>
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
          <span class="dropdown-header">Have a nice day! {{$profil1->username}} :)</span>
          {{-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profile
          </a> --}}
          <div class="dropdown-divider"></div>
        <a href="{{url('admin/logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
        @endforeach
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li> --}}
    </ul>
  </nav>

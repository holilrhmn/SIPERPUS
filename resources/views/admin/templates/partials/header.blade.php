<nav class="main-header navbar navbar-expand navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset('assets/dist/img/boss(1).png')}}" class="user-image img-circle elevation-2 alt="User Image">
        <span class="hidden-xs">{{ auth()->user()->name }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-primary">
          <img src="{{ asset('assets/dist/img/boss(1).png')}}" class="img-circle elevation-2" alt="User Image">

          <p>
            {{ auth()->user()->name }}
          </p>
        </li>
        <!-- Menu Body -->
        
        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-right">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                class="btn btn-block btn-default btn-flat">Sign out</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </li>
    </ul>
  </nav>
<ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('agc') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manage Action Against Complaint</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('cproj') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage Current Projects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('mmp') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Manage MP's</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('area') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Manage Seats/Areas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
        <form action="{{  route('logout') }}" method="POST">
        {{ csrf_field() }}
        </form>
        </a>
          <i class="fas fa-fw fa-table"></i>
          <span>Log Out</span></a>
      </li>
    </ul>
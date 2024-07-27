 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">

      <span class="brand-text font-weight-light">Covirus</span>
    </a>



      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('chartjs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('flot')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doute</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>barchart</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('df_world_max_new_death')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>World Max New Death</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_world_recent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>World Recent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_world_over_time')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>World Over Time</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_syria2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Syria 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_syria_recent2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Syria Recent 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_syria_max')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Syria Max</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_world_reproduction_rate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>World Reproduction Rate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('df_tests_per_case')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tests Per Case</p>
                </a>

              </li>
            </ul>
        </li>



      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

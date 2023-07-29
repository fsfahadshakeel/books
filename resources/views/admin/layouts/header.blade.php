<header class="main-header">

    <!-- Logo -->
    <a href="{{url('/dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b style="color:#b3b820">C</b>City</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="color:#685d48">Cam</b><b style="color:#b3b820">ko</b>City</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('admin_assets/dist/img/admin.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs"> {{ Session::get('current_user')->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('admin_assets/dist/img/admin.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Session::get('current_user')->name }}
                </p>
              </li>
              <!-- Menu Body -->
             <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                  <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
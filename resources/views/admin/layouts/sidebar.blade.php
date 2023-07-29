<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('admin_assets/dist/img/admin.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p></p>
        <p> {{ Session::get('current_user')->name }}</p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ in_array(\Request::route()->getName(),['','dashboard']) ? 'active' : '' }}">
      <a href="{{url('/dashboard')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="{{ in_array(\Request::route()->getName(),['backend-news-notice','add-news-notice','edit-news-notice']) ? 'active' : '' }}">
        <a href="{{url('/backend-news-notice')}}">
            <i class="fa fa-newspaper-o"></i> <span>News & Notice</span>
          </a>
      </li>
      <li class="{{ in_array(\Request::route()->getName(),['contact-queries']) ? 'active' : '' }}">
        <a href="{{url('/contact-queries')}}">
            <i class="fa fa-envelope"></i> <span>Contact Queries</span>
          </a>
      </li>
      <li class="{{ in_array(\Request::route()->getName(),['our-subscriber']) ? 'active' : '' }}">
        <a href="{{url('/our-subscriber')}}">
            <i class="fa fa-users"></i> <span>Our Subscriber</span>
          </a>
      </li>
      <!--<li class="">
        <a href="{{url('backend/properties')}}">
            <i class="fa fa-building"></i> <span>Appointments</span>
          </a>
      </li>-->
      <li class="header">MENUS</li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
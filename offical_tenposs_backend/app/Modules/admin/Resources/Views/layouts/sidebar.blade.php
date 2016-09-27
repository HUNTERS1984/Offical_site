  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class=""><a href=""><i class="fa fa-photo"></i> <span>Thống kê</span></a></li> -->
        <li class="{{Active::setActive(2,'dashboard')}}"><a href="{{url('admincms/dashboard')}}"><span>Trang Chủ</span></a></li>
        <li class="{{Active::setActive(2,'blog')}}"><a href="{{route('admin.blog.index')}}"><span>Blog</span></a></li>
        <li class="{{Active::setActive(2,'intergration')}}"><a href="{{route('admin.intergration.index')}}"><span>Intergration</span></a></li>
        <li class="{{Active::setActive(2,'news')}}"><a href="{{route('admin.news.index')}}"><span>News</span></a></li>
        <li class="{{Active::setActive(2,'partnership')}}"><a href="{{route('admin.partnership.index')}}"><span>Partnership</span></a></li>
        <li class="{{Active::setActive(2,'startguide')}}"><a href="{{route('admin.startguide.index')}}"><span>Start Guide</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
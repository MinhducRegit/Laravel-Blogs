<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
  <div class="slimscroll-menu" id="remove-scroll">
  <div class="topbar-left">
      <a href="" class="logo">
          <img src="{{asset('assets/images/anh-hacker-1.jpg')}}" class="logo-lg" alt="" height="25">
         <span>{{__('admin.name-company')}}</span>
      </a>
  </div>
      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu" id="side-menu">
              <li class="menu-title">{{__('admin.menu')}}</li>
              <li>
                  <a href="{{ route('admin') }}" class="waves-effect">
                  <span class="mdi mdi-account"></span><span>{{__('admin.title-user')}}</span>
                  </a>
              </li> 
              <li>
                  <a href="{{ route('blogs') }}" class="waves-effect">
                  <span class="mdi mdi-google-controller"></span><span class="badge badge-info badge-pill float-right">9+</span> <span>{{__('admin.title-blog')}}</span>
                  </a>
              </li>

              <li>
                  <a href="{{ route('comments') }}" class="waves-effect"><span class="mdi mdi-message-text"></span><span>{{__('admin.title-comment')}}</span></a>
              </li>
              <li>
                  <a href="" class="waves-effect"><span class="mdi mdi-library-books"></span><span>{{__('admin.title-password_reset')}}</span></a>
              </li>
          </ul>

      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

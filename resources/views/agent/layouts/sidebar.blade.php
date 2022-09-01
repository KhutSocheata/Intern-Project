<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-center">
        <span class="brand-text font-weight-bold" >MANAGER</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <a href="/editprofile">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">                      
                <img src="/profiles/avatars/{{ Auth::user()->avatar}}" alt="author-image" class="img-circle elevation-2">
        </div>
            <div class="info">
                <a href="/editprofile" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>
    </a>
        <!-- SidebarSearch Form --> 
            <!-- Sidebar Menu -->
        
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/manager/home" class="nav-link">
                            <i class="nav-icon bi bi-speedometer2"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item {{ 'widget' == request()->path() ? 'active' : '' }}">
                        <a href="/admin/widget" class="nav-link ">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                New
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a href="/admin/page" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Page
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/manager/posts" class="nav-link">
                          <i class="nav-icon bi bi-people"></i>
                          <p>
                            Post Property
                          </p>
                        </a>
                      </li>
                    <li class="nav-item">
                        <a href="/manager/contacts" class="nav-link">
                            <i class="nav-icon bi bi-envelope"></i>
                            <p>
                               Contact Us
                                
                            </p>
                            
                        </a>
                    </li>
                      <li class="nav-item">
                        <a href="/admin/amenities" class="nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="margin-top:60px;">
                            <i class=" nav-icon bi bi-box-arrow-left"></i>
                            <p>
                                <button class="btn btn-success  btn-info btn-sm-5">{{ __('Logout') }}</button>
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/admin/table" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Table Data
                            </p>
                        </a>
                    </li> --}}
     

        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{ asset('/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Agents</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/profile" class="d-block">Agent</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

       
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item {{ 'home' == request()->path() ? 'active' : '' }}">
                        <a href="/agent/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard 
                            </p>
                        </a>
                    </li>

               
                    {{-- <li class="nav-item {{ 'widget' == request()->path() ? 'active' : '' }}">
                        <a href="/agent/widget" class="nav-link ">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                News
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/agent/property" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Property
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/agent/post" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Post Property
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/agent/table" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Table Data
                            </p>
                        </a>
                    </li>
     
        <li class="nav-item">

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <button
                    style="background-color: rgb(216, 227, 69); color:rgb(189, 34, 60); font-weight: bold">{{ __('Logout') }}</button>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{ asset('/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
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
                <a href="/admin/profile" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

       
            <!-- Sidebar Menu -->
        
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
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
                        <a href="/admin/user" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                               User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/property" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Property
                                
                            </p>
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/rooms" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Room
                            </p>
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/addresses" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Address
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/amenities" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Amenity
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Type Property
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/admin/type/rent" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>For Rent</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/admin/type/sale" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>For Sale</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/admin/type/rental" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Vacation Rental</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    {{-- <li class="nav-item">
                        <a href="/admin/table" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Table Data
                            </p>
                        </a>
                    </li> --}}
     
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

        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    {{-- <img src="assets/images/logo.svg" alt="" srcset=""> --}}
                    {{-- <h4>Dashboard Admin</h3> --}}
                    <a href="#" class='sidebar-link'>

                        <span>Dashboard</span>
                    </a>

                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item {{ request()->routeIs('dashboard-admin') ? 'active' : '' }} ">
                            <a href="{{ route('dashboard-admin') }}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('kelola-pengaduan-admin') ? 'active' : '' }} ">
                            <a href="{{ route('kelola-pengaduan-admin') }}" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Kelola Pengaduan</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('kelola-masyarakat-admin') ? 'active' : '' }} ">
                            <a href="{{ route('kelola-masyarakat-admin') }}" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Kelola Masyarakat</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <a href="{{ route('dashboard-petugas') }}" class='sidebar-link'>

                        <span>Dashboard</span>
                    </a>

                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item {{ request()->routeIs('dashboard-petugas') ? 'active' : '' }} ">
                            <a href="{{ route('dashboard-petugas') }}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('kelola-laporan-petugas') ? 'active' : '' }} ">
                            <a href="{{ route('kelola-laporan-petugas') }}" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Kelola Laporan</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

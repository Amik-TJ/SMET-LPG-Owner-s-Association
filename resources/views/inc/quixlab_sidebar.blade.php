<!--**********************************
            Sidebar start
        ***********************************-->
@php
    $role = auth()->user()->role;
    if($role == 1)
    {
        $admin_1 = true;
        $admin_2 = false;
        $admin_3 = false;
        $station_owner = false;
    }
    elseif ($role == 2)
    {
        $admin_1 = false;
        $admin_2 = true;
        $admin_3 = false;
        $station_owner = false;
    }
    elseif ($role == 3)
    {
        $admin_1 = false;
        $admin_2 = false;
        $admin_3 = true;
        $station_owner = false;
    }
    elseif ($role == 4)
    {
        $admin_1 = false;
        $admin_2 = false;
        $admin_3 = false;
        $station_owner = true;
    }
@endphp

<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="/dashboard" >
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text font-weight-bold">Dashboard</span>
                </a>
            </li>
            @if($admin_1)

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text font-weight-bold">Manage Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/view_unverified_station_owners">Unverified Owner</a></li>
                    <li><a href="/view_verified_station_owners">Verified Owner</a></li>
                    <li><a href="/add_new_station_owner">Register a new Owner</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text font-weight-bold">Manage Stations</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/view_unverified_stations">Unverified Stations</a></li>
                    <li><a href="/view_verified_stations">Verified Stations</a></li>
                </ul>
            </li>
            @endif
            @if($station_owner)
                <li>
                    <a href="/individual_station">
                        <i class="icon-screen-tablet menu-icon"></i><span class="nav-text font-weight-bold">My Staions</span>
                    </a>
                </li>
            @endif
            <li>
                <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="icon-grid menu-icon"></i><span class="nav-text font-weight-bold">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

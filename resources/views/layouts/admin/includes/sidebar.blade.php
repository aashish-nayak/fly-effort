<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo w-100">
            <a href="{{ route('home') }}" class="w-100">
                <p class="text-light" style="font-size: 17px"><strong>{{config('info.app')}}</strong></p>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="ti-dashboard"></i><span>dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.users') }}">
                            <i class="ti-user"></i><span>Users</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.orders') }}">
                            <i class="ti-receipt"></i><span>Orders</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.internship-queries') }}">
                            <i class="fa fa-table"></i><span>Offline Internships</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.notification') }}">
                            <i class="fa fa-bell"></i><span>Notification</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.coupons') }}">
                            <i class="ti-gift"></i><span>Coupons</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();$('#logout-form').submit();">
                            <i class="ti-power-off"></i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

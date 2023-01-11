<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo w-100">
            <a href="{{ route('home') }}" class="w-100">
                <p class="text-light" style="font-size: 17px"><strong>Admin</strong></p>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active"> <a href="{{ route('admin.dashboard') }}"><i
                                class="ti-dashboard"></i><span>dashboard</span></a></li>
                    <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault();$('#logout-form').submit();"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">@yield('title')</h4>
                <ul class="breadcrumbs pull-left">
                    {{-- <li><span>Dashboard</span></li> --}}
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile py-2 pull-right">
                <img class="avatar user-thumb" src="{{asset('assets/images/author/avatar.png')}}" alt="avatar">
                <div class="text-center">
                    <h4 class="user-name">{{Auth::guard('admin')->user()->name}}</h4>
                    <span class="text-white">Admin</span>
                </div>
            </div>
        </div>
    </div>
</div>

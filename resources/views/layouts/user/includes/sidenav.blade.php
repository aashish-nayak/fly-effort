<div class="col-12 col-md-4 d-none d-lg-block">
    <div class="card border-light p-2">
        <div class="card-header bg-white border-0 text-center">
            <div class="profile-thumbnail profile-thumbnail mx-auto rounded-circle" style="border:1px solid #d0d0d0">
                <img src="{{auth()->user()->getImage('dp')}}" style="object-fit:scale-down" class="card-img-top h-100 w-100 rounded-circle border-white"
                    alt="Joseph Portrait" />
            </div>
            <h2 class="h5 mt-3">Hi, {{auth()->user()->name}}!</h2>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="btn btn-gray btn-xs">
                    <span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>
                    Sign Out
                </a>
            </form>
        </div>
        <div class="card-body p-2">
            <div class="list-group dashboard-menu list-group-sm">
                <a href="{{route('dashboard')}}" class="d-flex list-group-item border-0 list-group-item-action">
                    Dashboard
                    <span class="icon icon-xs ml-auto">
                        <span class="fas fa-chevron-right"></span>
                    </span>
                </a>
                <a href="{{route('profile')}}" class="d-flex list-group-item border-0 list-group-item-action">
                    Profile
                    <span class="icon icon-xs ml-auto">
                        <span class="fas fa-chevron-right"></span>
                    </span>
                </a>
                <a href="{{route('courses')}}" class="d-flex list-group-item border-0 list-group-item-action">
                    My Courses
                    <span class="icon icon-xs ml-auto">
                        <span class="fas fa-chevron-right"></span>
                    </span>
                </a>
                <a href="{{route('orders')}}" class="d-flex list-group-item border-0 list-group-item-action">
                    Orders
                    <span class="icon icon-xs ml-auto">
                        <span class="fas fa-chevron-right"></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-12 d-lg-none">
    <div class="card bg-white border-light mb-4 mb-lg-5">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-12 d-flex custom-scroll pb-1">
                    <a href="{{route('dashboard')}}"
                        class="list-group-item list-group-item-action border-0 text-center mr-2">
                        Dashboard
                    </a>
                    <a href="{{route('courses')}}"
                        class="list-group-item list-group-item-action border-0 text-center mr-2">
                        Courses
                    </a>
                    <a href="{{route('profile')}}"
                        class="list-group-item list-group-item-action border-0 text-center mr-2">
                        Profile
                    </a>
                    <a href="{{route('orders')}}"
                        class="list-group-item list-group-item-action border-0 text-center mr-2">
                        Orders
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="list-group-item list-group-item-action border-0 text-center mr-2">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
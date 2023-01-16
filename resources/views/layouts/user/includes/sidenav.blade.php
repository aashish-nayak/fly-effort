<div class="col-12 col-md-4 d-none d-lg-block">
    <div class="card border-light p-2">
        <div class="card-header bg-white border-0 text-center">
            <div class="profile-thumbnail profile-thumbnail mx-auto">
                <img src="{{auth()->user()->getImage('dp')}}" class="card-img-top rounded-circle border-white"
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
                <a href="{{route('dashboard')}}" class="d-flex list-group-item border-0 list-group-item-action active">
                    Overview
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
                <div class="col-10 d-flex">
                    <a href="account.html"
                        class="list-group-item list-group-item-action border-0 text-center mr-2 active">Overview</a>
                    <a href="settings.html"
                        class="list-group-item list-group-item-action border-0 text-center mr-2">Settings</a>
                    <a href="my-items.html"
                        class="list-group-item list-group-item-action border-0 text-center mr-2 d-none d-sm-block border-0">My
                        Items</a>
                    <a href="security.html"
                        class="list-group-item list-group-item-action border-0 text-center d-none d-md-block border-0">Security</a>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <div class="btn-group dropleft">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-split mr-2 m-0 p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-secondary fa-lg"></span>
                            </span><span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="my-items.html" class="list-group-item list-group-item-action d-sm-none border-0">My
                                Items</a>
                            <a href="security.html"
                                class="list-group-item list-group-item-action d-md-none border-0">Security</a>
                            <a href="billing.html" class="list-group-item list-group-item-action border-0">Billing</a>
                            <a href="messages.html" class="list-group-item list-group-item-action border-0">Messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
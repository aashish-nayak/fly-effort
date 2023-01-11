@include('layouts.admin.includes.header')
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <form method="POST" id="logout-form" action="{{ route('logout') }}">
        @csrf
    </form>
    <div class="page-container">
        @include('layouts.admin.includes.sidebar')
        <div class="main-content">
            @include('layouts.admin.includes.top-nav')
            <div class="main-content-inner">
                @yield('section')
            </div>
        </div>
        <footer>
            <div class="footer-area">
                <p>© Copyright 2022. All right reserved. Developed by <a href="https://www.maxfizz.com/" target="_blank">MaxFizz</a>.</p>
            </div>
        </footer>
    </div>
@include('layouts.admin.includes.scripts')
</body>

</html>

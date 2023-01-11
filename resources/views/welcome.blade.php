<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fly Effort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Route::has('admin.login'))
                    @if(Auth::guard("admin")->check())
                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link">Admin Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="nav-link">Admin Log in</a>
                    </li>
                    @if (Route::has('admin.register'))
                    <li class="nav-item">
                        <a href="{{ route('admin.register') }}" class="nav-link">Admin Register</a>
                    </li>
                    @endif
                    @endif
                    @endif
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($courses as $course)
            <div class="col">
                <div class="card h-100">
                    <img src="{{$course['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$course['course_name']}}</h5>
                        <p class="card-text">{{$course['description']}}</p>
                        <a href="{{$course['slug']}}" class="btn btn-primary">Buy Course</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
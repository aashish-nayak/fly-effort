<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('user_assets/assets/img/favicon/apple-touch-icon.png')}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('user_assets/assets/img/favicon/favicon-32x32.png')}}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user_assets/assets/img/favicon/favicon-16x16.png')}}" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="{{asset('user_assets/vendor/fortawesome/fontawesome-free/css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user_assets/vendor/glidejs/glide/dist/css/glide.core.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user_assets/vendor/glidejs/glide/dist/css/glide.theme.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user_assets/css/pixel.css')}}" />
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-secondary">
      <div class="container position-relative">
        <a class="navbar-brand mr-lg-5" href="{{url('/')}}"><img
            class="navbar-brand-dark" src="https://demo.themesberg.com/pixel-pro/assets/img/brand/light.svg"
            alt="Logo light" />
          <img class="navbar-brand-light" src="https://demo.themesberg.com/pixel-pro/assets/img/brand/dark.svg"
            alt="Logo dark" /></a>
        <div class="navbar-collapse collapse mr-auto" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="https://demo.themesberg.com/pixel-pro/index.html"><img
                    src="https://demo.themesberg.com/pixel-pro/assets/img/brand/dark.svg" alt="Themesberg logo" /></a>
              </div>
              <div class="col-6 collapse-close">
                <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global"
                  aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dashboardDropdown" aria-expanded="false"
                data-toggle="dropdown">Dashboard
                <span class="fas fa-angle-down nav-link-arrow ml-1"></span></a>
              <div class="dropdown-menu dropdown-megamenu-sm px-0 py-2 p-lg-4" aria-labelledby="dashboardDropdown">
                <div class="row">
                  <div class="col-6">
                    <h6 class="d-block mb-3 text-primary">
                      User dashboard
                    </h6>
                    <ul class="list-style-none mb-4">
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="account.html">My account</a>
                      </li>
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="settings.html">Settings</a>
                      </li>
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="security.html">Security</a>
                      </li>
                    </ul>
                    <h6 class="d-block mb-3 text-primary">
                      Items
                    </h6>
                    <ul class="list-style-none">
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="my-items.html">My items</a>
                      </li>
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="edit-item.html">Edit item</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <h6 class="d-block mb-3 text-primary">
                      Messaging
                    </h6>
                    <ul class="list-style-none mb-4">
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="messages.html">Messages</a>
                      </li>
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="single-message.html">Chat</a>
                      </li>
                    </ul>
                    <h6 class="d-block mb-3 text-primary">
                      Billing
                    </h6>
                    <ul class="list-style-none mb-4">
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="billing.html">Billing details</a>
                      </li>
                      <li class="mb-2 megamenu-item">
                        <a class="megamenu-link" href="invoice.html">Invoice</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center">
          <a href="https://themesberg.com/docs/pixel-bootstrap/getting-started/overview/" target="_blank"
            class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"><span class="fas fa-book mr-2"></span>
            Docs v4.0</a>
          <a href="https://themesberg.com/product/ui-kit/pixel-pro-premium-bootstrap-5-ui-kit" target="_blank"
            class="btn btn-tertiary animate-up-2"><span class="fas fa-shopping-cart mr-2"></span> Buy
            now</a>
          <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="preloader bg-dark flex-column justify-content-center align-items-center">
      <svg id="loader-logo" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 64 78.4">
        <path fill="#fff" d="M10,0h1.2V11.2H0V10A10,10,0,0,1,10,0Z" />
        <rect fill="none" stroke="#fff" stroke-width="11.2" x="40" y="17.6" width="0" height="25.6" />
        <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="11.2" x="23" y="35.2" width="0"
          height="25.6" />
        <path fill="#fff" d="M52.8,35.2H64V53.8a7,7,0,0,1-7,7H52.8V35.2Z" />
        <rect fill="none" stroke="#fff" stroke-width="11.2" x="6" y="52.8" width="0" height="25.6" />
        <path fill="#fff" d="M52.8,0H57a7,7,0,0,1,7,7h0v4.2H52.8V0Z" />
        <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="11.2" x="57.8" y="17.6" width="0"
          height="11.2" />
        <rect fill="none" stroke="#fff" stroke-width="11.2" x="6" y="35.2" width="0" height="11.2" />
        <rect fill="none" stroke="#fff" stroke-width="11.2" x="40.2" y="49.6" width="0" height="11.2" />
        <path fill="#fff" d="M17.6,67.2H28.8v1.2a10,10,0,0,1-10,10H17.6V67.2Z" />
        <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="28.8" x="31.6" width="0" height="11.2" />
        <rect fill="none" stroke="#fff" x="14" stroke-width="28.8" y="17.6" width="0" height="11.2" />
      </svg>
    </div>
    <div class="section section-lg pt-5 pt-md-7 bg-soft">
      <div class="container">
        <div class="row pt-5 pt-md-0">
          <div class="col-12 col-md-4 d-none d-lg-block">
            <div class="card border-light p-2">
              <div class="card-header bg-white border-0 text-center">
                <div class="profile-thumbnail profile-thumbnail mx-auto">
                  <img src="{{asset('user_assets/assets/img/team/profile-picture-3.jpg')}}" class="card-img-top rounded-circle border-white" alt="Joseph Portrait" />
                </div>
                <h2 class="h5 mt-3">Hi, Bonnie!</h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-gray btn-xs">
                        <span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>
                        Sign Out
                    </a>
                </form>
              </div>
              <div class="card-body p-2">
                <div class="list-group dashboard-menu list-group-sm">
                  <a href="account.html" class="d-flex list-group-item border-0 list-group-item-action active">Overview
                    <span class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                    href="settings.html" class="d-flex list-group-item border-0 list-group-item-action">Settings<span
                      class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                    href="my-items.html" class="d-flex list-group-item border-0 list-group-item-action">My Items<span
                      class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                    href="security.html" class="d-flex list-group-item border-0 list-group-item-action">Security<span
                      class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                    href="billing.html" class="d-flex list-group-item border-0 list-group-item-action">Billing<span
                      class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                    href="messages.html"
                    class="d-flex list-group-item border-0 list-group-item-action border-0">Messages<span
                      class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span></a>
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
          <div class="col-12 col-lg-8">
            <div class="row">
              <div class="col-12 col-sm-6 mb-4">
                <div class="card border-light">
                  <div class="card-body d-block d-md-flex align-items-center">
                    <div class="icon icon-shape icon-md icon-shape-primary rounded-circle mr-3 mb-4 mb-md-0">
                      <span class="fas fa-wallet"></span>
                    </div>
                    <div>
                      <span class="d-block h6 font-weight-normal">Global Budget</span>
                      <h5 class="h3 font-weight-bold mb-1">
                        $25,370.00
                      </h5>
                      <div class="small mt-2">
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success font-weight-bold">18.2%</span>
                        higher vs previous month
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 mb-4">
                <div class="card border-light">
                  <div class="card-body d-block d-md-flex align-items-center">
                    <div class="icon icon-shape icon-md icon-shape-primary rounded-circle mr-3 mb-4 mb-md-0">
                      <span class="fas fa-file-invoice-dollar"></span>
                    </div>
                    <div>
                      <span class="d-block h6 font-weight-normal">Sales</span>
                      <h5 class="h3 font-weight-bold mb-1">
                        $5,220.00
                      </h5>
                      <div class="small mt-2">
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success font-weight-bold">4.2%</span>
                        higher vs previous month
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="card border-light">
                  <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                      <div class="h6 font-weight-normal text-gray mb-2">
                        New customers
                      </div>
                      <h2 class="h3">452</h2>
                      <div class="small mt-2">
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success font-weight-bold">18.2%</span>
                      </div>
                    </div>
                    <div class="d-block ml-auto">
                      <div class="d-flex align-items-center text-right mb-2">
                        <span class="shape-xs rounded-circle bg-dark mr-2"></span>
                        <span class="font-weight-normal small">Last month</span>
                      </div>
                      <div class="d-flex align-items-center text-right">
                        <span class="shape-xs rounded-circle bg-tertiary mr-2"></span>
                        <span class="font-weight-normal small">This month</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-2">
                    <div class="ct-chart-5 ct-golden-section ct-series-e"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="card border-light">
                  <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                      <div class="h6 font-weight-normal text-gray mb-2">
                        Revenues
                      </div>
                      <h2 class="h3">10,567</h2>
                      <div class="small mt-2">
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success font-weight-bold">$10.57%</span>
                      </div>
                    </div>
                    <div class="d-block ml-auto">
                      <div class="d-flex align-items-center text-right mb-2">
                        <span class="shape-xs rounded-circle bg-dark mr-2"></span>
                        <span class="font-weight-normal small">Real Estate</span>
                      </div>
                      <div class="d-flex align-items-center text-right mb-2">
                        <span class="shape-xs rounded-circle bg-tertiary mr-2"></span>
                        <span class="font-weight-normal small">Electronic</span>
                      </div>
                      <div class="d-flex align-items-center text-right mb-2">
                        <span class="shape-xs rounded-circle bg-primary mr-2"></span>
                        <span class="font-weight-normal small">Clothes</span>
                      </div>
                      <div class="d-flex align-items-center text-right">
                        <span class="shape-xs rounded-circle bg-success mr-2"></span>
                        <span class="font-weight-normal small">Auto</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-2">
                    <div class="ct-chart-7 ct-golden-section ct-series-e"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="card border-light">
                  <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                      <div class="h6 font-weight-normal text-gray mb-2">
                        Sales Value
                      </div>
                      <h2 class="h3">10,567</h2>
                      <div class="small mt-2">
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success font-weight-bold">$10.57%</span>
                      </div>
                    </div>
                    <div class="d-flex ml-auto">
                      <a href="#" class="btn btn-tertiary btn-sm mr-3">Month</a>
                      <a href="#" class="btn btn-white border-light btn-sm mr-3">Week</a>
                    </div>
                  </div>
                  <div class="card-body p-2">
                    <div class="ct-chart-8 ct-major-tenth ct-series-b"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <script src="{{asset('user_assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/headroom.js/dist/headroom.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/prismjs/prism.js')}}"></script>
  <script src="{{asset('user_assets/vendor/vivus/dist/vivus.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/%40glidejs/glide/dist/glide.min.js')}}"></script>
  <script src="{{asset('user_assets/vendor/countup.js/dist/countUp.umd.js')}}"></script>
  <script src="{{asset('user_assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
  <script async defer="defer" src="../../../../buttons.github.io/buttons.js"></script>
  <script src="{{asset('user_assets/assets/js/pixel.js')}}"></script>
</body>

</html>
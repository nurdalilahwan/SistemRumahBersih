@push('js')
<script>
$('.sidebar-toggle').on('click', function(e) {
        $.ajax({
            type: "POST",
            url: "{{ route('sidebarToggle') }}"
        });
    });
</script>
@endpush

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link sidebar-toggle" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
        <form class="form-inline">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
        </form>
        </div>
    </li>


    <!-- Language -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" data-toggle="tooltip" data-placement="bottom" title="{{ __('Language') }}" aria-expanded="false">
        <i class="{{ get_locale() }}"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
        <a href="{{ route('locale','en') }}" class="dropdown-item">
            <i class="flag-icon flag-icon-gb mr-2"></i> English
        </a>
        <a href="{{ route('locale','ms') }}" class="dropdown-item">
            <i class="flag-icon flag-icon-my mr-2"></i> Bahasa Melayu
        </a>
        </div>
    </li>

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>

    <!-- User Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ avatar() }}" class="user-image img-circle elevation-2" alt="User Image" width="25" height="25">
            <span class="d-none d-md-inline"> {{ Auth::user()->name }}</span>
            <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="max-width: 180px" aria-labelledby="navbarDropdown">
                {{-- @permission('UserProfile')         --}}
                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a>
                {{-- @endpermission --}}
                @permission('UserSettings')
                @endpermission
                <a class="dropdown-item" href="{{ route('reset-password') }}"><i class="fas fa-key"></i> Change Password</a>
                <div class="dropdown-divider"></div>


                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
        </li>

        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

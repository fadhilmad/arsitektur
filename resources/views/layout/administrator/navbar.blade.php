<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-icon btn-round">
                    <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                    <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                </button>
            </div>
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:;">DSATELI3R</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="{{ url('/') }}">
                        <i class="nc-icon nc-layout-11"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Landing</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Notification</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item d-md-none d-block">
                    <a class="nav-link btn-magnify" href="{{ url('/profile') }}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Profile</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item d-md-none d-block">
                    <a class="nav-link btn-magnify" href="{{ url('/logout') }}">
                        <i class="nc-icon nc-button-power"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Log Out</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item d-md-block d-none">
                    <a class="nav-link dropdown-toggle pt-0 pb-0 no-carret" href="javascript:;" id="profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="image-profile-nav"
                            src="{{ asset('/uploads/foto-profile/' . System::getImageProfile(Auth::id())) }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right no-carret" aria-labelledby="profile-dropdown">
                        <a class="dropdown-item" href="{{ url('/administrator/profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

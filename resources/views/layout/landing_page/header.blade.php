<div class="menu-bg-wrap">
    <div class="site-navigation">
        <a href="home" class="logo m-0 float-start">DSATELI3R</a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
            <li class="active"><a href="/">Home</a></li>
            <li class="has-children">
                <a href="/projects">Project</a>
                <ul class="dropdown">
                    <li><a href="/interios">Interiors</a></li>
                    <li><a href="/miscellaneouse">Miscellaneouse</a></li>
                    <li class="has-children">
                        <a href="/arsitekture">Arsitekture</a>
                        <ul class="dropdown">
                            <li><a href="/commercial_index">Commercial</a></li>
                            <li><a href="/residential_index">Residential</a></li>
                            <li><a href="/retail_index">Retail</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact Us</a></li>


            <button type="submit" class="btn btn-success">login</button>
        </ul>
        <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
        </a>

    </div>
</div>

{{-- <div class="col-xl-3">
    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-3 p-xl-0">
            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                <div class="list-group list-group-dark list-group-borderless">
                    <a class="list-group-item {{set_active(['user-setting/profil','user-setting/profil/edit'],'active')}}" href="{{url('user-setting/profil')}}"><i class="bi bi-person-fill fa-fw me-2"></i>Profil</a>

                    @If($user->role_id==ROLE_PENDAMPING || $user->role_id==ROLE_UMKM)
                    <a class="list-group-item {{set_active(['user-setting/profil-akun','user-setting/profil-akun-*'],'active')}}" href="{{url('user-setting/profil-akun')}}"><i class="bi bi-file-text fa-fw me-2"></i>Data {{$user->role_id==ROLE_PENDAMPING?'Pendamping':''}}{{$user->role_id==ROLE_UMKM?'UMKM':''}}
                    </a>
                    @endif
                    <a class="list-group-item {{set_active(['user-bank','user-bank/*'],'active')}}" href="{{url('user-bank')}}"><i class="bi bi-bank fa-fw me-2"></i>Rekening Bank</a>
                    <a class="list-group-item {{set_active(['lokasiku'],'active')}}" href="{{url('lokasiku')}}"><i class="bi bi-pin-map-fill fa-fw me-2"></i>Lokasiku</a>
                    <a class="list-group-item {{set_active(['user-setting/point','check-in'],'active')}}" href="{{url('user-setting/point')}}"><i class="bi bi-currency-dollar fa-fw me-2"></i>Point lunas</a>
                    <a class="list-group-item {{set_active(['riwayat-transaksi','transaksi-detail/*'],'active')}}" href="{{url('riwayat-transaksi')}}"><i class="bi bi-journal-text fa-fw me-2"></i>Riwayat Transaksi</a>
                    <a class="list-group-item {{set_active(['user-setting/wallet'],'active')}}" href="{{url('user-setting/wallet')}}"><i class="bi bi-wallet fa-fw me-2"></i>Lunas Pay</a>
                    <a class="list-group-item {{set_active(['affiliate'],'active')}}" href="{{url('affiliate')}}"><i class="bi bi-star fa-fw me-2"></i>Affliate</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
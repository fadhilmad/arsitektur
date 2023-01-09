<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="{{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
            <a href="{{ url('/administrator/dashboard') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a data-toggle="collapse" href="#projeck" aria-expanded="true">
                <i class="nc-icon nc-ruler-pencil"></i>
                <p>
                    Projek <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="projeck">
                <ul class="nav">
                    <li class="{{ request()->segment(2) == 'projeck-architecture' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/projeck-architecture') }}">
                            <span class="sidebar-mini-icon nc-icon nc-ruler-pencil"></span>
                            <span class="sidebar-normal">Projek Arsitektur</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'projeck-interior' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/projeck-interior') }}">
                            <span class="sidebar-mini-icon nc-icon nc-ruler-pencil"></span>
                            <span class="sidebar-normal">Projek Interior</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'projeck-miscellaneouse' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/projeck-miscellaneouse') }}">
                            <span class="sidebar-mini-icon nc-icon nc-ruler-pencil"></span>
                            <span class="sidebar-normal">Projek Miscellaneouse</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#frontend" aria-expanded="true">
                <i class="nc-icon nc-layout-11"></i>
                <p>
                    Frontend <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="frontend">
                <ul class="nav">
                    <li class="{{ request()->segment(3) == 'about-us' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/about-us') }}">
                            <span class="sidebar-mini-icon nc-icon nc-alert-circle-i"></span>
                            <span class="sidebar-normal">About Us</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(3) == 'contact-us' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/contact-us') }}">
                            <span class="sidebar-mini-icon nc-icon nc-send"></span>
                            <span class="sidebar-normal">Contact Us</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(3) == 'identitas-web' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/identitas-web') }}">
                            <span class="sidebar-mini-icon nc-icon nc-world-2"></span>
                            <span class="sidebar-normal">Identitas Web</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(3) == 'navbar' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/navbar') }}">
                            <span class="sidebar-mini-icon nc-icon nc-tile-56"></span>
                            <span class="sidebar-normal">Navbar</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(3) == 'slide-show' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/slide-show') }}">
                            <span class="sidebar-mini-icon nc-icon nc-image"></span>
                            <span class="sidebar-normal">Slide Show</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(3) == 'ourteam' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/frontend/ourteam') }}">
                            <span class="sidebar-mini-icon nc-icon nc-badge"></span>
                            <span class="sidebar-normal">Our Team</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#master-data" aria-expanded="true">
                <i class="nc-icon nc-book-bookmark"></i>
                <p>
                    Master Data <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="master-data">
                <ul class="nav">
                    <li class="{{ request()->segment(3) == 'kategori-architecture' ? 'active' : '' }}">
                        <a href="{{ url('/administrator/datamaster/kategori-architecture') }}">
                            <span class="sidebar-mini-icon nc-icon nc-bullet-list-67"></span>
                            <span class="sidebar-normal">Kategori Arsitektur</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="{{ request()->segment(2) == 'users' ? 'active' : '' }}">
            <a href="{{ url('/administrator/users') }}">
                <i class="nc-icon nc-single-02"></i>
                <p>
                    Users <b class=""></b>
                </p>
            </a>
        </li>
    </ul>
</div>

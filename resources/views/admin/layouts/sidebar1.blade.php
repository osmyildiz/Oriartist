<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="bx bx-home"></i>
                        <span key="t-dashboards">HOME</span>
                    </a>

                </li>

                <li>
                    <a href="/admin-whoweare" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">WHO WE ARE</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-whatweofferclient" class="waves-effect">
                        <i class="bx bxs-offer"></i>
                        <span key="t-dashboards">WHAT WE OFFER (CLIENT)</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-whatweofferartist" class="waves-effect">
                        <i class="bx bxs-offer"></i>
                        <span key="t-dashboards">WHAT WE OFFER (ARTIST)</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-artist" class="waves-effect">
                        <i class="bx bxs-photo-album"></i>
                        <span key="t-dashboards">OUR ARTISTS</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-joinus" class="waves-effect">
                        <i class="bx bxs-folder-plus"></i>
                        <span key="t-dashboards">JOINUS</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-contact" class="waves-effect">
                        <i class="bx bxs-contact"></i>
                        <span key="t-dashboards">CONTACT</span>
                    </a>

                </li>


                <li>
                    <a href="/admin-bookartist" class="waves-effect">
                        <i class="bx bxs-archive"></i>
                        <span key="t-dashboards">BOOK ARTIST</span>
                    </a>

                </li>
                <li>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();" class="waves-effect"><i class="bx bx-log-out"></i>
                            <span key="t-dashboards">Logout</span></a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>




                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

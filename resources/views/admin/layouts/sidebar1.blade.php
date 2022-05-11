<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="/admin-summary" class="waves-effect">
                        <i class="bx bx-archive"></i>
                        <span key="t-dashboards">Özet Bölümü</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-photo-gallery" class="waves-effect">
                        <i class="bx bxs-photo-album"></i>
                        <span key="t-dashboards">Foto Galeri</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-video-gallery" class="waves-effect">
                        <i class="bx bx-video"></i>
                        <span key="t-dashboards">Video Galleri</span>
                    </a>

                </li>

                <li>
                    <a href="/admin-sector" class="waves-effect">
                        <i class="bx bxs-compass"></i>
                        <span key="t-dashboards">Sektör Raporları</span>
                    </a>

                </li>
                <li>
                    <a href="/admin-report/1" class="waves-effect">
                        <i class="bx bxs-report"></i>
                        <span key="t-dashboards">Önceki Şuralar</span>
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

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Aolikasi</div>
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <a class="nav-link {{ Request::is('guru') ? 'active' : '' }}" href="/guru">
                <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                Guru
            </a>

            <a class="nav-link {{ Request::is('kelas*') ? 'active' : '' }}" href="/kelas">
                <div class="sb-nav-link-icon"><i class="fas fa-archway"></i></div>
                Kelas
            </a>

            <a class="nav-link {{ Request::is('siswa') ? 'active' : '' }}" href="/siswa">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Siswa
            </a>

            

            {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
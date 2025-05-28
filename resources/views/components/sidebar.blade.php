@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="">STISLA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="">STISLA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @if (Auth::user()->role == 'superadmin')
            <li class="menu-header">Hak Akses</li>
            <li class="{{ Request::is('hakakses') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('hakakses') }}"><i class="fas fa-user-shield"></i> <span>Hak Akses</span></a>
            </li>
            @endif
            <!-- profile ganti password -->
            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}"><i class="far fa-user"></i> <span>Profile</span></a>
            </li>
            <li class="{{ Request::is('profile/change-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/change-password') }}"><i class="fas fa-key"></i> <span>Ganti Password</span></a>
            </li> 

            <li class="menu-header">Menu</li>
            <li class="{{ Request::is('siswa') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('siswa') }}"><i class="fas fa-table"></i> <span>Siswa</span></a>
            </li>
            <li class="{{ Request::is('guru') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('guru') }}"><i class="fas fa-calendar"></i> <span>Guru</span></a>
            </li>
            <li class="{{ Request::is('berita') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('berita') }}"><i class="fas fa-images"></i> <span>Berita</span></a>
            </li>
            <li class="{{ Request::is('spp*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('spp') }}"><i class="fas fa-chart-bar"></i> <span>SPP</span></a>
            </li>
            <li class="{{ Request::is('tahunajar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('tahunajar') }}"><i class="fas fa-file-alt"></i> <span>Tahun Ajar</span></a>
            </li>
            <li class="{{ Request::is('surat') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('surat') }}"><i class="fas fa-map"></i> <span>Surat Masuk dan Keluar</span></a>
            </li>
            <br>
            <br>
            <br>
            <br>

            <li class="{{ Request::is('todo-example') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('todo-example') }}"><i class="fas fa-list"></i> <span>Todo Example</span></a>
            </li>
            <li class="{{ Request::is('contact-example') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('contact-example') }}"><i class="fas fa-envelope"></i> <span>Contact Example</span></a>
            </li>
            <li class="{{ Request::is('faq-example') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('faq-example') }}"><i class="fas fa-question-circle"></i> <span>FAQ Example</span></a>
            </li>
            <li class="{{ Request::is('news-example') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('news-example') }}"><i class="fas fa-newspaper"></i> <span>News Example</span></a>
            </li>
            <li class="{{ Request::is('about-example') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('about-example') }}"><i class="fas fa-info-circle"></i> <span>About Example</span></a>
            </li>
        </ul>
    </aside>
</div>
@endauth
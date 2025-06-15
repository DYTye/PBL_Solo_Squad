@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="">Tk Islam Nurul Falah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="">NF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('Visi Misi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profil') }}"><i class="fas fa-school"></i> <span>Profil</span></a>
            </li>
            {{-- <li class="{{ Request::is('Visi Misi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profil') }}"><i class="fas fa-gem"></i><span>Visi Misi</span></a>
            </li> --}}
            <li class="{{ Request::is('guru') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('sejarah') }}"><i class="fas fa-scroll"></i> <span>Sejarah</span></a>
            </li>
            {{-- <li class="{{ Request::is('guru') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('') }}"><i class="fas fa-user-tie"></i> <span>guru</span></a>
            </li> --}}
            <li class="{{ Request::is('berita') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('beritafe') }}"><i class="fas fa-images"></i> <span>Berita</span></a>
            </li>
            <li class="{{ Request::is('surat') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('') }}"><i class="far fa-envelope"></i> <span>Surat Masuk dan Keluar</span></a>
            </li>

            
 


           
        </ul>
    </aside>
</div>
@endauth
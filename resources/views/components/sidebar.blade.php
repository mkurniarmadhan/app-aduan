<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Route::is('home') ? '' : 'collapsed' }}  " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Route::is('pelapor.create', 'pelapor.index', 'pelapor.show') ? '' : 'collapsed' }}"
                data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Menu Aduan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav"
                class="nav-content collapse  {{ Route::is('pelapor.create', 'pelapor.index', 'pelapor.show') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('pelapor.index') }}"
                        class=" {{ Route::is('pelapor.index', 'pelapor.show') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Riwayat Aduan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pelapor.create') }}" class=" {{ Route::is('pelapor.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Bikin Aduan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->



    </ul>

</aside>

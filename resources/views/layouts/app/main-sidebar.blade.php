<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('img/rumah bersih-logos_transparent.png') }}" alt="Rumah Bersih" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Rumah Bersih</span>
  </a>
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                        <!-- <i class="nav-icon fas fa-home"></i><p>{{ __('Halaman Utama') }}</p> -->
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('perkhidmatan') }}" class="nav-link {{ (request()->is('perkhidmatan')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hand-sparkles"></i><p>{{ __('Perkhidmatan') }}</p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('img/rumah bersih-logos_transparent.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              {{ __('Dashboard') }}
            </p>
          </a>
        </li>

        @permission('menu-peguam-panel')
        <li class="nav-item {{ set_menu_open(['peguam-panel/*']) }}">
          <a href="#" class="nav-link {{ set_active(['peguam-panel/*']) }}">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>
              {{ __('Peguam Panel') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @permission('menu-pp-permohonan')
            <li class="nav-item">
              <a href="{{ route('peguam-panel.pp-permohonan') }}" class="nav-link {{ set_active(['peguam-panel/pp-permohonan*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Mohon Peguam Panel') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-pp-permohonan')
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pp-profil') }}" class="nav-link {{ set_active(['peguam-panel/pp-profil*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Profil Peguam Panel') }}</p>
                </a>
            </li>
            @endpermission
            @permission('menu-pp-pembatalan')
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pp-pembatalan') }}" class="nav-link {{ set_active(['peguam-panel/pp-pembatalan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Batal Peguam Panel') }}</p>
                </a>
              </li>
            @endpermission
            @permission('menu-pp-permohonan-semakan')
            <li class="nav-item">
              <a href="{{ route('peguam-panel.pp-pengesahan-permohonan') }}" class="nav-link {{ set_active(['peguam-panel/pp-pengesahan-permohonan*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pengesahan Permohonan Peguam Panel') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-pp-profil-semakan')
            <li class="nav-item">
              <a href="{{ route('peguam-panel.pp-pengesahan-profil') }}" class="nav-link {{ set_active(['peguam-panel/pp-pengesahan-profil*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pengesahan Profil Peguam Panel') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-pp-pembatalan-semakan')
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pp-pengesahan-pembatalan') }}" class="nav-link {{ set_active(['peguam-panel/pp-pengesahan-pembatalan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Pengesahan Pembatalan Peguam Panel') }}</p>
                </a>
              </li>
            @endpermission
            <li class="nav-item">
              <a href="{{ route('peguam-panel.penarikan-diri') }}" class="nav-link {{ set_active(['peguam-panel/penarikan-diri*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Penarikan Diri') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('peguam-panel.senarai-penarikan-diri') }}" class="nav-link {{ set_active(['peguam-panel/senarai-penarikan-diri*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Senarai Penarikan Diri') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-khidmat-peguam*', 'peguam-panel/senarai-fail-kes*']) }}">
                <i class="nav-icon fas fa-receipt"></i>
                <p>{{ __('Khidmat Peguam') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('peguam-panel.senarai-permohonan-khidmat-peguam') }}" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-khidmat-peguam*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Permohonan') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('peguam-panel.senarai-fail-kes') }}" class="nav-link {{ set_active(['peguam-panel/senarai-fail-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Fail Kes') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-penarikan-kes*']) }}">
                <i class="nav-icon fas fa-receipt"></i>
                <p>{{ __('Penarikan Kes') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('peguam-panel.senarai-permohonan-penarikan-kes') }}" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-penarikan-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Permohonan') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-penolakan-kes*']) }}">
                <i class="nav-icon fas fa-receipt"></i>
                <p>{{ __('Penolakan Kes') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('peguam-panel.senarai-permohonan-penolakan-kes') }}" class="nav-link {{ set_active(['peguam-panel/senarai-permohonan-penolakan-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Permohonan') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pembantu-tadbir') }}" class="nav-link {{ set_active(['peguam-panel/pembantu-tadbir*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Peguam Panel (PT)') }}</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pengarah-peguam-panel') }}" class="nav-link {{ set_active(['peguam-panel/pengarah-peguam-panel*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Peguam Panel (PPP)') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('peguam-panel.ketua-pengarah-j-b-g') }}" class="nav-link {{ set_active(['peguam-panel/ketua-pengarah-j-b-g*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Peguam Panel (Ketua Pengarah JBG)') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('peguam-panel.pengarah-cawangan') }}" class="nav-link {{ set_active(['peguam-panel/pengarah-cawangan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Pengarah Cawangan') }}</p>
                </a>
            </li>
          </ul>
        </li>
        @endpermission

        @permission('menu-fail-kes')
        <li class="nav-item {{ set_menu_open(['tadbir-fail-kes/*']) }}">
          <a href="#" class="nav-link {{ set_active(['tadbir-fail-kes/*']) }}">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              {{ __('Pentadbiran Kes') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @permission('menu-fail-kes-pemindahan-maklumat-kes')
            <li class="nav-item {{ set_menu_open(['tadbir-fail-kes/pemindahan-maklumat-kes*']) }}">
              <a href="#" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-maklumat-kes*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pemindahan Maklumat Kes') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('tadbir-fail-kes.pemindahan-maklumat-kes.senarai-fail-kes') }}" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-maklumat-kes/senarai-fail-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Fail Kes') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('tadbir-fail-kes.pemindahan-maklumat-kes.senarai-permohonan') }}" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-maklumat-kes/senarai-permohonan*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Permohonan') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            @endpermission

            @permission('menu-fail-kes-penugasan-semula')
            <li class="nav-item {{ set_menu_open(['tadbir-fail-kes/penugasan-fail-kes*']) }}">
              <a href="#" class="nav-link {{ set_active(['tadbir-fail-kes/penugasan-fail-kes*']) }}">
                <i class="far fa-circle nav-icon text-orange"></i>
                <p>{{ __('Penugasan/ Penugasan Semula Fail Kes') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                @permission('menu-penugasan-fk')
                <li class="nav-item">
                    <a href="{{ route('tadbir-fail-kes.penugasan-fail-kes.penugasan-fail-kes') }}" class="nav-link {{ set_active(['tadbir-fail-kes/penugasan-fail-kes/penugasan-fail-kes*']) }}">
                    <i class="far fa-circle nav-icon text-yellow"></i>
                    <p>{{ __('Penugasan Fail Kes') }}</p>
                  </a>
                </li>
                @endpermission
                @permission('menu-penugasan-bg-kn')
                <li class="nav-item">
                    <a href="{{ route('tadbir-fail-kes.penugasan-fail-kes.penugasan-bantuan-guaman') }}" class="nav-link {{ set_active(['tadbir-fail-kes/penugasan-fail-kes/penugasan-bantuan-guaman*']) }}">
                    <i class="far fa-circle nav-icon text-yellow"></i>
                    <p>{{ __('Penugasan Permohonan Bantuan Guaman') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tadbir-fail-kes.penugasan-fail-kes.penugasan-khidmat-nasihat') }}" class="nav-link {{ set_active(['tadbir-fail-kes/penugasan-fail-kes/penugasan-khidmat-nasihat*']) }}">
                    <i class="far fa-circle nav-icon text-yellow"></i>
                    <p>{{ __('Penugasan Khidmat Nasihat') }}</p>
                  </a>
                </li>
                @endpermission
              </ul>
            </li>
            @endpermission

            @permission('menu-fail-kes-pemindahan-fail-kes')
            <li class="nav-item {{ set_menu_open(['tadbir-fail-kes/pemindahan-fail-kes*']) }}">
              <a href="#" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-fail-kes*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pemindahan Fail Kes') }}</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('tadbir-fail-kes.pemindahan-fail-kes.senarai-fail-kes') }}" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-fail-kes/senarai-fail-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Fail Kes') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('tadbir-fail-kes.pemindahan-fail-kes.senarai-permohonan') }}" class="nav-link {{ set_active(['tadbir-fail-kes/pemindahan-fail-kes/senarai-permohonan*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Senarai Permohonan') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            @endpermission
          </ul>
        </li>
        @endpermission

        @permission('menu-kewangan')
        <li class="nav-item {{ set_menu_open(['kewangan/*']) }}">
          <a href="#" class="nav-link {{ set_active(['kewangan/*']) }}">
            <i class="nav-icon fas fa-balance-scale"></i>
            <p>
              {{ __('Kewangan') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @permission('menu-kewangan-terimaan')
            <li class="nav-item {{ set_menu_open(['kewangan/terimaan/*','kewangan/terimaan-kaunter/*','kewangan/terimaan-online/*']) }}">
              <a href="#" class="nav-link {{ set_active(['kewangan/terimaan/*']) }}">
                <i class="nav-icon fas fa-receipt"></i>
                <p>
                  {{ __('Terimaan') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @permission('menu-kewangan-terimaan-batalresit')
                <li class="nav-item">
                  <a href="{{ route('kewangan.terimaan.batal-resit') }}" class="nav-link {{ set_active(['kewangan/terimaan/batal-resit*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Batal Resit') }}</p>
                  </a>
                </li>
                @endpermission
                @permission('menu-kewangan-terimaan-cektaklaku')
                <li class="nav-item">
                  <a href="{{ route('kewangan.terimaan.cek-tak-laku') }}" class="nav-link {{ set_active(['kewangan/terimaan/cek-tak-laku*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Cek/Wang Tak Laku') }}</p>
                  </a>
                </li>
                @endpermission
                  @permission('menu-kewangan-terimaankaunter')
                  <li class="nav-item {{ set_menu_open(['kewangan/terimaan-kaunter/*']) }}">
                    <a href="#" class="nav-link {{ set_active(['kewangan/terimaan-kaunter/*']) }}">
                      <i class="nav-icon fas fa-cash-register"></i>
                      <p>
                        {{ __('Kaunter') }}
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      @permission('menu-kewangan-terimaankaunter-mel')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-kaunter.mel') }}" class="nav-link {{ set_active(['kewangan/terimaan-kaunter/mel*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Mel') }}</p>
                        </a>
                      </li>
                      @endpermission
                      @permission('menu-kewangan-terimaankaunter-resit')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-kaunter.resit') }}" class="nav-link {{ set_active(['kewangan/terimaan-kaunter/resit*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Resit') }}</p>
                        </a>
                      </li>
                      @endpermission
                      @permission('menu-kewangan-terimaankaunter-tutupkaunter')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-kaunter.tutup-kaunter') }}" class="nav-link {{ set_active(['kewangan/terimaan-kaunter/tutup-kaunter*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Tutup Kaunter') }}</p>
                        </a>
                      </li>
                      @endpermission
                      @permission('menu-kewangan-terimaankaunter-penyatapemungut')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-kaunter.penyata-pemungut') }}" class="nav-link {{ set_active(['kewangan/terimaan-kaunter/penyata-pemungut*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Penyata Pemungut') }}</p>
                        </a>
                      </li>
                      @endpermission
                    </ul>
                  </li>
                  @endpermission
                  @permission('menu-kewangan-terimaanonline')
                  <li class="nav-item {{ set_menu_open(['kewangan/terimaan-online/*']) }}">
                    <a href="#" class="nav-link {{ set_active(['kewangan/terimaan-online/*']) }}">
                      <i class="nav-icon fas fa-gem"></i>
                      <p>
                        {{ __('Online') }}
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      @permission('menu-kewangan-terimaanonline-terimaanharian')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-online.terimaan-harian') }}" class="nav-link {{ set_active(['kewangan/terimaan-online/terimaan-harian*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Terimaan Harian') }}</p>
                        </a>
                      </li>
                      @endpermission
                      @permission('menu-kewangan-terimaanonline-penyatapemungut')
                      <li class="nav-item">
                        <a href="{{ route('kewangan.terimaan-online.penyata-pemungut') }}" class="nav-link {{ set_active(['kewangan/terimaan-online/penyata-pemungut*']) }}">
                          <i class="far fa-dot-circle nav-icon text-{{ random_color() }}"></i>
                          <p>{{ __('Penyata Pemungut') }}</p>
                        </a>
                      </li>
                      @endpermission
                    </ul>
                  </li>
                  @endpermission
              </ul>
            </li>
            @endpermission
            @permission('menu-kewangan-bayaran')
            <li class="nav-item {{ set_menu_open(['kewangan/bayaran/*']) }}">
              <a href="#" class="nav-link {{ set_active(['kewangan/bayaran/*']) }}">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  {{ __('Bayaran') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @permission('menu-kewangan-bayaran-arahan-bayaran')
                <li class="nav-item">
                  <a href="{{ route('kewangan.bayaran.arahan-bayaran') }}" class="nav-link {{ set_active(['kewangan/bayaran/arahan-bayaran*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>{{ __('Arahan Bayaran') }}</p>
                  </a>
                </li>
                @endpermission
              </ul>
            </li>
            @endpermission
            @permission('menu-kewangan-jurnal')
            <li class="nav-item">
              <a href="{{ route('kewangan.jurnal') }}" class="nav-link {{ set_active(['kewangan/jurnal*']) }}">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  {{ __('Pelarasan Jurnal') }}
                </p>
              </a>
            </li>
            @endpermission
            @permission('menu-kewangan-lejar')
            <li class="nav-item">
              <a href="{{ route('kewangan.lejar') }}" class="nav-link {{ set_active(['kewangan/lejar*']) }}">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  {{ __('Lejar') }}
                </p>
              </a>
            </li>
            @endpermission
          </ul>
        </li>
        @endpermission

        @permission('menu-manage')
        <li class="nav-item {{ set_menu_open(['manage/*']) }}">
          <a href="#" class="nav-link {{ set_active(['manage/*']) }}">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>
              {{ __('Urus') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @permission('menu-user-staf')
            <li class="nav-item">
              <a href="{{ route('manage.staf') }}" class="nav-link {{ set_active(['manage/staf*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Staf') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-user-peguam')
            <li class="nav-item">
              <a href="{{ route('manage.peguam') }}" class="nav-link {{ set_active(['manage/peguam*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Peguam') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-user-awam')
            <li class="nav-item">
              <a href="{{ route('manage.awam') }}" class="nav-link {{ set_active(['manage/awam*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Awam') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-user-agensi')
            <li class="nav-item">
              <a href="{{ route('manage.agensi') }}" class="nav-link {{ set_active(['manage/agensi*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Agensi') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-role')
            <li class="nav-item">
              <a href="{{ route('manage.roles') }}" class="nav-link {{ set_active(['manage/roles*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Peranan') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-ruj-kategori')
            <li class="nav-item">
              <a href="{{ route('manage.ruj-kategori') }}" class="nav-link {{ set_active(['manage/ruj-kategori*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Rujukan Kategori/SubKategori') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-ruj-jeniskes')
            <li class="nav-item">
              <a href="{{ route('manage.ruj-jenis-kes') }}" class="nav-link {{ set_active(['manage/ruj-jenis-kes*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Rujukan Jenis Kes') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-ruj-jkes-anakguam')
            <li class="nav-item">
              <a href="{{ route('manage.ruj-jkes-anakguam') }}" class="nav-link {{ set_active(['manage/ruj-jkes-anakguam*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Rujukan Jenis Kes Anak Guam') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-ruj-jkes-skrin')
            <li class="nav-item">
              <a href="{{ route('manage.ruj-jkes-skrin') }}" class="nav-link {{ set_active(['manage/ruj-jkes-skrin*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Rujukan Skrin Kes Anak Guam') }}</p>
              </a>
            </li>
            @endpermission
            @permission('menu-ruj-jkes-dokumen')
            <li class="nav-item">
              <a href="{{ route('manage.ruj-jkes-dokumen') }}" class="nav-link {{ set_active(['manage/ruj-jkes-dokumen*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Rujukan Dokumen Kes Anak Guam') }}</p>
              </a>
            </li>
            @endpermission
            {{-- @permission('menu-kalendar') --}}
            <li class="nav-item">
              <a href="{{ route('manage.kalendar') }}" class="nav-link {{ set_active(['manage/kalendar']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Kalendar') }}</p>
              </a>
            </li>
            {{-- @endpermission --}}
            {{-- @permission('menu-kalendar-perancangan') --}}
            <li class="nav-item">
              <a href="{{ route('manage.kalendar-perancangan') }}" class="nav-link {{ set_active(['manage/kalendar-perancangan*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Kalendar Perancangan') }}</p>
              </a>
            </li>
            {{-- @endpermission --}}
            {{-- @permission('menu-ruj-slot-masa') --}}
            <li class="nav-item">
              <a href="{{ route('manage.ruj-slot-masa') }}" class="nav-link {{ set_active(['manage/ruj-slot-masa*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Slot Masa') }}</p>
              </a>
            </li>
            {{-- @endpermission --}}
            {{-- @permission('menu-notifikasi-peringatan') --}}
            <li class="nav-item">
              <a href="{{ route('manage.notifikasi-peringatan') }}" class="nav-link {{ set_active(['manage/notifikasi-peringatan*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Notifikasi Peringatan') }}</p>
              </a>
            </li>
            {{-- @endpermission --}}
          </ul>
        </li>
        @endpermission

        @permission('menu-khidmatnasihat')
        <li class="nav-item {{ set_menu_open(['khidmat-nasihat/*']) }}">
          <a href="#" class="nav-link {{ set_active(['khidmat-nasihat/*']) }}">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              {{ __('Khidmat Nasihat') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('khidmat-nasihat.online') }}" class="nav-link {{ set_active(['khidmat-nasihat/online*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Permohonan Online') }}</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('khidmat-nasihat.penjara') }}" class="nav-link {{ set_active(['khidmat-nasihat/penjara*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Penjara') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('khidmat-nasihat.klinik') }}" class="nav-link {{ set_active(['khidmat-nasihat/klinik*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Klinik') }}</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('khidmat-nasihat.pembantutadbir') }}" class="nav-link {{ set_active(['khidmat-nasihat/pembantutadbir*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pembantu Tadbir') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('khidmat-nasihat.pegawai') }}" class="nav-link {{ set_active(['khidmat-nasihat/pegawai*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Pegawai') }}</p>
              </a>
            </li>
          </ul>
        </li>
        @endpermission

        @permission('menu-bantuanguaman')
        <li class="nav-item {{ set_menu_open(['bantuan-guaman/*']) }}">
          <a href="#" class="nav-link {{ set_active(['bantuan-guaman/*']) }}">
            <i class="nav-icon fas fa-gavel"></i>
            <p>
              {{ __('Bantuan Guaman') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('bantuan-guaman.online') }}" class="nav-link {{ set_active(['bantuan-guaman/online*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>
                  {{ __('Permohonan Bantuan Guaman (Awam)') }}
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bantuan-guaman.penjara') }}" class="nav-link {{ set_active(['bantuan-guaman/penjara*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>
                      {{ __('Permohonan Bantuan Guaman (Penjara)') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bantuan-guaman.jkm') }}" class="nav-link {{ set_active(['bantuan-guaman/jkm*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>
                      {{ __('Permohonan Bantuan Guaman (Pegawai JKM)') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bantuan-guaman.semakan') }}" class="nav-link {{ set_active(['bantuan-guaman/semakan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Semakan Bantuan Guaman') }}</p>
                </a>
            </li>
            </li>
            <li class="nav-item {{ set_menu_open(['bantuan-guaman/kes-pengecualian-*']) }}">
              <a href="#" class="nav-link {{ set_active(['bantuan-guaman/kes-pengecualian-*']) }}">
                <i class="nav-icon fas fa-gavel"></i>
                <p>
                  {{ __('Kes Pengecualian') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.kes-pengecualian-unitlitigasi') }}" class="nav-link {{ set_active(['bantuan-guaman/kes-pengecualian-unitlitigasi*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Kes Pengecualian (UL)') }}
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.kes-pengecualian-timbalanketuapengarah') }}" class="nav-link {{ set_active(['bantuan-guaman/kes-pengecualian-timbalanketuapengarah*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Kes Pengecualian (TKP)') }}
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.kes-pengecualian-ketuapengarah') }}" class="nav-link {{ set_active(['bantuan-guaman/kes-pengecualian-ketuapengarah*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Kes Pengecualian (KP)') }}
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.kes-pengecualian-menteri') }}" class="nav-link {{ set_active(['bantuan-guaman/kes-pengecualian-menteri*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Kes Pengecualian (M)') }}
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ set_menu_open(['bantuan-guaman/pengantaraan-*']) }}">
              <a href="#" class="nav-link {{ set_active(['bantuan-guaman/pengantaraan-*']) }}">
                <i class="nav-icon fas fa-gavel"></i>
                <p>
                  {{ __('Maklumat Pengantaraan') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.pengantaraan-permohonan') }}" class="nav-link {{ set_active(['bantuan-guaman/pengantaraan-permohonan*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Senarai Permohonan') }}
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bantuan-guaman.pengantaraan-fail-kes') }}" class="nav-link {{ set_active(['bantuan-guaman/pengantaraan-fail-kes*']) }}">
                    <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                    <p>
                      {{ __('Senarai Fail Kes') }}
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ set_menu_open(['bantuan-guaman/kes-*']) }}">
                <a href="#" class="nav-link {{ set_active(['bantuan-guaman/maklumat-kes-*']) }}">
                  <i class="nav-icon fas fa-gavel"></i>
                  <p>
                    {{ __('Maklumat Kes') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('bantuan-guaman.maklumat-kes-fail-kes') }}" class="nav-link {{ set_active(['bantuan-guaman/maklumat-kes-fail-kes*']) }}">
                      <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                      <p>
                        {{ __('Senarai Fail Kes') }}
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
          </ul>
        </li>
        @endpermission

        {{-- @permission('menu-perkhidmatanonline') --}}
        <li class="nav-item {{ set_menu_open(['perkhidmatan-online/*']) }}">
          <a href="{{ route('perkhidmatan-online') }}" class="nav-link {{ set_active(['perkhidmatan-online/*']) }}">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              {{ __('Perkhidmatan Online') }}
            </p>
          </a>
        </li>
        {{-- @endpermission --}}

        <li class="nav-item {{ set_menu_open(['utility/*']) }}">
            <a href="#" class="nav-link {{ set_active(['utility/*']) }}">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                {{ __('Utility') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('rujukan.ruj-no-jujukan') }}" class="nav-link {{ set_active(['rujukan/ruj-no-jujukan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('No. Jujukan') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rujukan.ruj-am') }}" class="nav-link {{ set_active(['rujukan/ruj-am*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Rujukan Am') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rujukan.ruj-cawangan') }}" class="nav-link {{ set_active(['rujukan/ruj-cawangan*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Rujukan Cawangan') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rujukan.maklum-balas') }}" class="nav-link {{ set_active(['rujukan/maklum-balas*']) }}">
                  <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                  <p>{{ __('Borang Maklum Balas') }}</p>
                </a>
              </li>
            </ul>
        </li>

        @permission('menu-activity-log')
        <li class="nav-item">
          <a href="{{ route('activity-log') }}" class="nav-link {{ (request()->is('activity-log')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>
              {{ __('Activity Log') }}
            </p>
          </a>
        </li>
        @endpermission

        @permission('menu-log-viewer')
        <li class="nav-item">
          <a href="{{ route('log-viewer::dashboard') }}" class="nav-link {{ (request()->is('log-viewer::dashboard')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-bug"></i>
            <p>
              {{ __('Log Viewer') }}
            </p>
          </a>
        </li>
        @endpermission

        @env('local')
        <li class="nav-item">
          <a href="{{ route('admin-lte-component') }}" class="nav-link {{ (request()->is('admin-lte-component')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-shapes"></i>
            <p>
              {{ __('Form Component') }}
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('workflow.carian') }}" class="nav-link {{ (request()->is('carian')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-search"></i>
            <p>
              {{ __('Carian Permohonan') }}
            </p>
          </a>
        </li>
        <li class="nav-item {{ set_menu_open(['workflow/*']) }}">
          <a href="#" class="nav-link {{ set_active(['workflow/*']) }}">
            <i class="nav-icon fas fa-stream"></i>
            <p>
              {{ __('Workflow') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('workflow.wf-process') }}" class="nav-link {{ set_active(['workflow/wf-process*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Workflow Process') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('workflow.wf-module') }}" class="nav-link {{ set_active(['workflow/wf-module*']) }}">
                <i class="far fa-circle nav-icon text-{{ random_color() }}"></i>
                <p>{{ __('Workflow Module') }}</p>
              </a>
            </li>
          </ul>
        </li>
        @endenv
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

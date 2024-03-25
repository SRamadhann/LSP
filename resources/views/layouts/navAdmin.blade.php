<ul class="navbar-nav me-auto">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (Route::is('input.maskapai')) ? 'active' : '' }}" aria-current="page" href="{{ route('input.maskapai') }}">Input Maskapai</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tampil 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item {{ (Route::is('tampil.maskapai')) ? 'active' : '' }}" href="{{ route('tampil.maskapai') }}">Tampil Maskapai</a></li>
                  <li><a class="dropdown-item {{ (Route::is('tampil.maskapai')) ? 'active' : '' }}" href="{{ route('tampil.pegawai') }}">Tampil Pegawai</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item {{ (Route::is('tampil.customer')) ? 'active' : ''}}" href="{{ route('tampil.customer') }}">Tampil Customer</a></li>
                </ul>
              </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ (Route::is('kegiatan.tampil')) ? 'active' : '' }} " aria-current="page" href="{{ route('kegiatan.tampil') }}">Tampil Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::is('kegiatan.input')) ? 'active' : '' }}" href="{{ route('kegiatan.input') }}">Input Kegiatan</a>
          </li> --}}
        </ul>
      </div>
</ul>

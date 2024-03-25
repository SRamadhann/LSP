<ul class="navbar-nav me-auto">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (Route::is('tampil.tiket')) ? 'active' : '' }}" aria-current="page" href="{{ route('tampil.tiket') }}">Tampil Tiket</a>
              </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::is('history.tiket')) ? 'active' : '' }}" aria-current="page" href="{{ route('history.tiket') }}">Tiket Ku</a>
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

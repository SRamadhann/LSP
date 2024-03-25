<ul class="navbar-nav me-auto">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (Route::is('input.penerbangan')) ? 'active' : '' }}" aria-current="page" href="{{ route('input.penerbangan') }}">Input Penerbangan</a>
              </li>
              
              <li class="nav-item">
               <a class="nav-link {{ (Route::is('tampil.penerbangan')) ? 'active' : '' }} " aria-current="page" href="{{ route('tampil.penerbangan') }}">Tampil Penerbangan</a>
             </li>

              <li class="nav-item">
               <a class="nav-link {{ (Route::is('konfirmasi.penerbangan')) ? 'active' : '' }} " aria-current="page" href="{{ route('konfirmasi.penerbangan') }}">Konfirmasi Penerbangan</a>
             </li>
              
          {{-- <li class="nav-item">
            <a class="nav-link {{ (Route::is('kegiatan.input')) ? 'active' : '' }}" href="{{ route('kegiatan.input') }}">Input Kegiatan</a>
          </li>  --}}
        </ul>
      </div>
</ul>

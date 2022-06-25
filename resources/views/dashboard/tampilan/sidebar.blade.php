<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <a href="#collapseOperator" data-bs-toggle="collapse"> 
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3  mb-1 text-muted text-decoration-underline">
            <span>Operator Sistem</span>
          </h6> 
        </a>
        <div class="collapse" id="collapseOperator">
          <div class="card card-body" style="background-color:#F8F9FA">
            <small class="text-muted">
              Operator Sistem bertanggungjawab dalam sebagian pengelolaan Sistem Informasi Desa Purwodadi dan dengan pengawasan dari Administrator Sistem.
            </small>  
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard-beritadesa*') ? 'active' : '' }}" href="/dashboard-beritadesa">
            <span data-feather="file-text"></span>
            Kelola Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard-kategories*') ? 'active' : '' }}" aria-current="page" href="/dashboard-kategories">
            <span data-feather="grid"></span>
            Kategori Berita
          </a>
        </li>
      </ul>

      @can('admin')
      <a class="" href="#collapseAdmin" data-bs-toggle="collapse"> 
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4  mb-1 text-muted text-decoration-underline">
          <span>Administrator Sistem</span>
        </h6> 
      </a>
      <div class="collapse" id="collapseAdmin">
        <div class="card card-body" style="background-color:#F8F9FA">
          <small class="text-muted">
            Administrator Sistem bertanggungjawab penuh dalam seluruh pengelolaan Sistem Informasi Desa Purwodadi.
          </small>  
        </div>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard-wilayah*') ? 'active' : '' }} {{ Request::is('dashboard-pendidikan*') ? 'active' : '' }} {{ Request::is('dashboard-pekerjaan*') ? 'active' : '' }} {{ Request::is('dashboard-agama*') ? 'active' : '' }} {{ Request::is('dashboard-perkawinan*') ? 'active' : '' }} {{ Request::is('dashboard-jeniskelamin*') ? 'active' : '' }}" href="#collapseData" data-bs-toggle="collapse">
            <span data-feather="database"></span>
            Data Desa 
          </a>
          <div class="collapse" id="collapseData">
            <div class="card card-body" style="background-color:#F8F9FA">
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-wilayah">Wilayah Administrasi</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-pendidikan">Data Pendidikan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-pekerjaan">Data Pekerjaan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-agama">Data Agama</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-perkawinan">Data Perkawinan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard-jeniskelamin">Data Jenis Kelamin</a>
            </div>
          </div>
        </li>
      </ul>  
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard-easpirasi*') ? 'active' : '' }}" aria-current="page" href="/dashboard-easpirasi">
            <span data-feather="bell"></span>
            E-Aspirasi
          </a>
        </li>
      </ul>  
      @endcan

    </div>
  </nav>
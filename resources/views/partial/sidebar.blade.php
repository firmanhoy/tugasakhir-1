<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/admin">KO <span class="text-danger">AR</span>
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/admin">K <span class="text-danger">R</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Dashboard</span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class="nav-link {{ (request()->is('admin/dashboard')) ? 'aktif':'' }}" href="/admin/dashboard">Status</a>
          </li>
          <li>
            <a class="nav-link {{ (request()->is('admin/admin')) ? 'aktif':'' }}" href="/admin/admin">Admin</a>
          </li>
        </ul>
      </li>
      <li class="menu-header">menu</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-mail-bulk"></i>
          <span>Kotak Pos</span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class="nav-link {{ (request()->is('admin/pesan')) ? 'aktif':'' }}" href="/admin/pesan/">
              <i class="fas fa-envelope"></i>Pesan Masuk </a>
          </li>
          {{-- <li>
            <a class="nav-link {{ (request()->is('admin/pesan/diterima')) ? 'aktif':'' }}" href="/admin/pesan/diterima">
              <i class="fas fa-envelope-open-text"></i> Diterima </a>
          </li>
          <li>
            <a class="nav-link {{ (request()->is('admin/pesan/sampah')) ? 'aktif':'' }}" href="/admin/pesan/sampah">
              <i class="far fa-times-circle"></i>Ditolak </a>
          </li> --}}
        </ul>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-database"></i>
          <span>List</span>
        </a>
        <ul class="dropdown-menu">
          {{-- <li>
              <a class="nav-link" href="bootstrap-alert.html">
                <i class="fas fa-users"></i>User
              </a>
            </li> --}}
          <li>
            <a class="nav-link {{ (request()->is('admin/list/kategori')) ? 'aktif':'' }}" href="/admin/list/kategori">
              <i class="fas fa-tags"></i>Kategori </a>
          </li>
          <li>
            <a class="nav-link {{ (request()->is('admin/list/waka')) ? 'aktif':'' }}" href="/admin/list/waka">
              <i class="fas fa-user-graduate"></i>Waka </a>
          </li>
        </ul>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-plus"></i>
          <span>Tambah Data</span>
        </a>
        <ul class="dropdown-menu">
          {{-- <li>
                <a class="nav-link" href="bootstrap-alert.html">
                  <i class="fas fa-users"></i>User
                </a>
              </li> --}}
          <li>
            <a class="nav-link {{ (request()->is('admin/add/kategori')) ? 'aktif':'' }}" href="/admin/add/kategori">
              <i class="fas fa-tags"></i>Kategori </a>
          </li>
          <li>
            <a class="nav-link {{ (request()->is('admin/add/waka')) ? 'aktif':'' }}" href="/admin/add/waka">
              <i class="fas fa-user-graduate"></i>Waka </a>
          </li>
        </ul>
      </li>
  </aside>
</div>  
@php $currentRoute = url(join('/', request()->segments())); @endphp
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('dashboard') }}">PT. MAXIMA REI</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('dashboard') }}">MXREI</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item {{ route('dashboard') == $currentRoute ? 'active' : null }}">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dasbor</span></a>
      </li>
      <li class="menu-header">Master Data</li>
      @can('Melihat daftar pengguna')
      <li class="nav-item {{ route('user.index') == $currentRoute ? 'active' : null }}">
        <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-user-secret"></i><span>Super Admin/Admin</span></a>
      </li>
      @endcan
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-user-tie"></i><span>Manajer</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-users-cog"></i><span>Teknisi</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-users"></i><span>Klien/Pemilik</span></a>
      </li>
      <li class="menu-header">Maintenance</li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-clock"></i><span>Data Kontrak Schedule</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-warehouse"></i><span>Data Stock Spareparts</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-dolly-flatbed"></i><span>Site Inventory Client</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-calendar-alt"></i><span>Schedule Asset</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-tasks"></i><span>Task</span></a>
      </li>
      <li class="menu-header">Support</li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-ticket-alt"></i><span>Request Ticket</span></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link"><i class="fas fa-flag"></i><span>Report & Summary</span></a>
      </li>
      <li class="menu-header">Permission</li>
      @can('Melihat daftar role')
      <li class="nav-item {{ route('role.index') == $currentRoute ? 'active' : null }}">
        <a href="{{ route('role.index') }}" class="nav-link"><i class="fas fa-user-tag"></i><span>Role</span></a>
      </li>
      @endcan
      @can('Melihat daftar Hak Akses')
      <li class="nav-item {{ route('permissions') == $currentRoute ? 'active' : null }}">
        <a href="{{ route('permissions') }}" class="nav-link"><i class="fas fa-cogs"></i><span>Hak Akses</span></a>
      </li>
      @endcan
    </ul>
  </aside>
</div>
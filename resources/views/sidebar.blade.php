@if (auth()->user()->role == "superadmin")
  <div class="nk-nav-scroll">
    <ul class="metismenu" id="menu">
        <li>
            <a href="/dashboard" aria-expanded="false">
                <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li class="mega-menu mega-menu-sm">
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-settings menu-icon"></i><span class="nav-text">Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="/lembaga">Instansi/Lembaga</a></li>
                <li><a href="/unit-kerja">Unit Kerja</a></li>
                <li><a href="/user">User</a></li>
            </ul>
        </li>
        <li>
            <a href="/surat-masuk" aria-expanded="false">
                <i class="ti-email menu-icon"></i><span class="nav-text">Surat Masuk</span><i class="icon-arrow-left-circle menu-icon pull-right"></i>
            </a>
        </li>
        <li>
            <a href="/surat-keluar" aria-expanded="false">
                <i class="ti-email menu-icon"></i><span class="nav-text">Surat Keluar</span><i class="icon-arrow-right-circle menu-icon pull-right"></i>
            </a>
        </li>
        <li class="mega-menu mega-menu-sm">
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="ti-printer menu-icon"></i><span class="nav-text">Report</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="/report-sm">Surat Masuk</a></li>
                <li><a href="./report-sk">Surat Keluar</a></li>
            </ul>
        </li>
    </ul>
  </div>
@else
  <div class="nk-nav-scroll">
    <ul class="metismenu" id="menu">
        <li>
            <a href="index.html" aria-expanded="false">
                <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" aria-expanded="false">
                <i class="ti-email menu-icon"></i><span class="nav-text">Surat Masuk</span><i class="icon-arrow-left-circle menu-icon pull-right"></i>
            </a>
        </li>
        <li>
            <a href="#" aria-expanded="false">
                <i class="ti-email menu-icon"></i><span class="nav-text">Surat Keluar</span><i class="icon-arrow-right-circle menu-icon pull-right"></i>
            </a>
        </li>
    </ul>
  </div>
@endif


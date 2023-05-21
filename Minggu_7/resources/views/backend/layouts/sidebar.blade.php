<aside id="sidebar" class="sidebar">
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li>
        <a class="" href="index.html">
            <i class="icon_profile"></i>
            <span>profile</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="javascript;" class="">
            <i class="icon_document_alt"></i>
            <span>riwayat hidup</span>
            <span class="menu-arrow_carrot-right"></span>
        </a>
        <ul class="sub">
            <li><a class="" href="{{ url('pendidikan') }}">pendidikan</a></li>
            <li><a class="" href="{{ route('page_pengalaman-kerja')}}">pengalaman_kerja</a></li>
        </ul>
      </li>
    </ul>
    </div>
  </aside>
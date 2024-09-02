
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/siswa') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Siswa</span>
            </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('kategori') }}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Kategori</span>
          </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/inputaspirasi') }}">
            <i class="mdi mdi-comment-text-outline menu-icon"></i>
            <span class="menu-title">Pengaduan</span>
        </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/laporan') }}">
          <i class="mdi mdi-alert-circle menu-icon"></i>
          <span class="menu-title">Laporan</span>
      </a>
  </li>
  
          
        </ul>
      </nav>
     
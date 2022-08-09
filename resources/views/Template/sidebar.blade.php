<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{asset('gambar/logo.png')}}" alt="AdminLTE Logo" class="brand-image img"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Perpus Gemas</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('gambar/user.png')}}" class="img-circle " alt="User Image">
      </div>
       <div class="info">
        <a  class="d-block">{{Auth()->user()->name}}</a>
      </div> 
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
           
            <li class="nav-item">
              <a href="{{url('buku')}}" class="nav-link ">
                <i class="fas fa-book"></i>
                <p>Buku</p>
              </a>
            </li>
            

            <li class="nav-item">
              <a href="{{url('kategori')}}" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                <p>Kategori</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('/pinjam')}}" class="nav-link">
                <i class="fas fa-hourglass-start"></i>
                <p>Peminjaman</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('/pengembalian')}}" class="nav-link">
                <i class="fas fa-hourglass-end"></i>
                <p>Pengembalian</p>
              </a>
            </li>
          </li>
      </ul> 
    </nav>  
    
    @if (\Auth()->user()->level == "admin") 
    <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                     <i class="fas fa-user-cog"></i>
                     <p>
                      Manage Anggota
                     <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
          <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="{{ url('manageanggota')}}" class="nav-link">
                     <i class="fas fa-users"></i>
                     <p>Data Anggota</p>
                     </a>
                 </li>
               <li class="nav-item">
               <li class="nav-item">
                  <a href="{{url('profilanggota')}}" class="nav-link">
                      <i class="fas fa-address-card"></i>
                      <p>Profil Anggota</p>
                      </a>
                      </li>
                      </ul>
     <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                       <i class="fas fa-file-alt"></i>
                       <p>
                       Laporan
                       <i class="right fas fa-angle-left"></i>
                       </p>
                       </a>
           <ul class="nav nav-treeview">
        <li class="nav-item">
                  <a href="{{ url('laporan')}}" class="nav-link">
                        <i class="fas fa-file-alt"></i>
                          <p>laporan</p>
                  </a>
        </li>
        </ul>
    @endif
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
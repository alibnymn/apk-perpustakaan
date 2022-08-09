<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
   @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Buku</h5>
          </div>
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Master Data</li>
              <li class="breadcrumb-item ">Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
          </div>
        </div>
            <div class="box-header">     
            <div class="col-md-8 col-md-offset-2">
              <p>
                <a href="{{ url('buku') }}" class="btn btn-flat btn-sm btn-warning"><i class="fas fa-sync-alt"></i>Refresh</a>
                @if (\Auth()->user()->level == "admin") 
                <a href="{{ url('tambahbuku') }}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-plus"></i>Tambah</a>
                @endif
                <a href="{{ url('/buku') }}" class="btn btn-flat btn-sm btn-primary">All Buku</a>
                <a href="{{ url('buku/kosong') }}" class="btn btn-flat btn-sm btn-danger">Buku Stock Habis</a>
                <a href="{{ url('buku/nonaktif') }}" class="btn btn-flat btn-sm btn-info">Buku Nonaktif</a>
              </p>
            </div>
        </div> 
        <div class="table-responsive">
        <div class="card-body">
          <table class="table table-hover" id="table">
            <thead>
              <tr>
                <th>#</th>
                @if (\Auth()->user()->level == "admin") 
                <th>Aksi</th>
                @endif
                @if (\Auth()->user()->level == "user") 
                <th>Pinjam</th>
                @endif
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun_Terbit</th>
                <th>Stock</th>
                <th>Status</th>
                @if (\Auth()->user()->level == "admin") 
                <th>Action</th>
                @endif
                
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $e=>$dt)
              
              <tr>
                <td>{{ $e+1 }}</td>
                @if (\Auth()->user()->level == "admin") 
                <td>
                  @if($dt->status == 1)
                  <a href="{{ url('buku/status/'.$dt->id) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                  @else
                  <a href="{{ url('buku/status/'.$dt->id) }}" class="btn btn-sm btn-success">Aktifkan</a>
                  @endif
                </td>
                @endif
                @if (\Auth()->user()->level == "user") 
                <td>
                  <a href="{{ url('pinjam/'.$dt->id) }}" class="btn btn-flat btn-sm btn-primary">Pinjam Buku</a>
                </td>
                @endif
                <td>
                  <img src="{{ asset('uploads/'.$dt->gambar) }}" style="width: 50px;">
                </td>
                <td>{{ $dt->judul }}</td>
                <td>
                  {{ $dt->kategori_r->nama }}
                </td>
                <td>{{ $dt->penulis }}</td>
                <td>{{ $dt->penerbit }}</td>
                <td>{{ $dt->tahun_terbit }}</td>
                <td>{{ $dt->stock }}</td>
                <td><label class="btn btn-sm {{ ($dt->status == 1) ? 'btn-success' : 'btn-danger' }}"> {{ ($dt->status == 1) ? 'Aktif' : 'Tidak Aktif' }}</label></td>
                @if (\Auth()->user()->level == "admin") 
                <td>
                  <p> 
                    <a href="{{ url('editbuku/'.$dt->id) }}" class="btn btn-warning btn-xs" id="edit"><i class="fa fa-pencil-alt"></i></a>
                    <a href="{{ url('buku/'.$dt->id) }}" class="btn btn-flat btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                  </p>
                </td>
                @endif
              </tr> 
              @endforeach              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
 @include('Template.script')
</body>
</html>
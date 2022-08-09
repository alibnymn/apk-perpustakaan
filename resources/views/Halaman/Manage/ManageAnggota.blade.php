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
            <h5 class="card-title">Data Anggota Perpustakaan</h5>
          </div>
          </div>
          {{-- <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kategori Buku</h1>
          </div><!-- /.col --> --}}
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Manage Anggota</li>
              <li class="breadcrumb-item ">Data Anggota</li>
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
            </div>
            <div class="table-responsive">
            <div class="card-body">
                  <table class="table table-bordered">
                    
                      <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>kelas</th>
                        <th>jurusan</th>
                        <th>level</th>
                        <th>password</th>
                        <th>Cetak anggota</th>
                      </tr>
                      @foreach ($data as $e=>$dt)
                      <tr>
                        <td>{{ $e+1 }}</td>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->kelas }}</td>
                        <td>{{ $dt->jurusan }}</td>
                        <td>{{ $dt->level }}</td>
                        <td>123</td>
                        <td><a href="{{ url('cetakanggota/'.$dt->id) }}" class="btn btn-flat btn-sm btn-success"><i class="fas fa-print">Print kartu</i></a></td>
                      </tr>   
                      @endforeach
                  </table>
                   
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
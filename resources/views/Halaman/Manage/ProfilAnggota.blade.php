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
            <h5 class="card-title">Profil Anggota Perpustakaan</h5>
          </div>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Manage Anggota</li>
              <li class="breadcrumb-item ">Profil Anggota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
          </div>
        </div>
            <div class="box-header">      
            <div class="col-md-8 col-md-offset-2">
              <p>
                <a href="{{ url('profilanggota') }}" class="btn btn-flat btn-sm btn-warning"><i class="fas fa-sync-alt"></i>Refresh</a>
                <a href="{{ url('tambahanggota') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
            </p>
            </div>
            <div class="table-responsive">
            <div class="card-body"> 
                  <table class="table table-hover" id="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>kelas</th>
                        <th>jurusan</th>
                        <th>level</th>
                        <th>created at</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $e=>$dt)
                      <tr>
                        <td>{{ $e+1 }}</td>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->kelas }}</td>
                        <td>{{ $dt->jurusan }}</td>
                        <td>{{ $dt->level }}</td>
                        <td>{{ $dt->created_at }}</td>
                        <td>
                          <div style="width:60px">
                          <a href="{{ url('editanggota/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-alt"></i></a>
                          <a href="{{ url('profilanggota/'.$dt->id) }}" class="btn btn-danger btn-xs" id="delete"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>   
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.row -->
                </div>
              </div><!-- /.container-fluid -->  
            </div>
           </div>
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
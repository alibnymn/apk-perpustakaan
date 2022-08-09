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
            <h5 class="card-title">Data Laporan Perpustakaan</h5>
          </div>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Laporan</li>
              <li class="breadcrumb-item ">Laporan Perpustakaan</li>
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
          <h4>{{ $title }}</h4>
          <div class="card-tools">
          </div>
        </div>
            <div class="box-header">     
              <p>
                <a href="{{ url('laporan') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-sync-alt"></i> Get All Data</a>
                <a href="{{ url('cetaklaporan') }}" class="btn btn-flat btn-sm btn-success"><i class="fas fa-print"></i> Print Laporan</a>
            </p>
            <div class="col-md-8 col-md-offset-1">
              <form class="form-inline" method="get" action="{{ url('lapora/periode') }}">
                <div class="form-group">
                  <label for="email">Tanggal awal:</label>
                  <input type="text" name="tanggal_awal" class="form-control datepicker" id="email" autocomplete="off" value="{{ date('Y-m-d') }}">
                </div>

                <div class="form-group">
                  <label for="pwd">Tanggal akhir:</label>
                  <input type="text" name="tanggal_akhir" class="form-control datepicker" id="pwd" autocomplete="off" value="{{ date('Y-m-d') }}">
                </div>

                 <div class="form-group">
                  <label for="pwd">user:</label>
                  <select class="form-control select2" name="user">
                      <option value="all">All Anggota</option>
                      @foreach($users as $us)
                      <option value="{{ $us->id }}">{{ $us->name }}</option>
                      @endforeach
                  </select>
                </div> 
               
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
            <div class="table-responsive">
            <div class="card-body">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>kelas</th>
                        <th>buku</th>
                        <th>status</th>
                        <th>tgl_pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->user_r->name }}</td>
                            <td>{{ $dt->user_r->kelas }}</td>
                            <td>{{ $dt->buku_r->judul }}</td>

                            <td>{{ $dt->status_r->nama }}</td>

                            <td>{{ date('d F Y H:i:s',strtotime($dt->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
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

        
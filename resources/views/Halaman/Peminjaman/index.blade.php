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
            <h5 class="card-title">Peminjaman</h5>
          </div>
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Master Data</li>
              <li class="breadcrumb-item ">Peminjaman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
          </div>
        </div>
            <div class="box-header">      
            <div class="col-md-8 col-md-offset-2">
              <p>
                <a href="{{ url('pinjam') }}" class="btn btn-flat btn-sm btn-warning "><i class="fas fa-sync-alt"></i>Refresh</a>
              </p>
            </div>
            <div class="table-responsive">
            <div class="card-body"> 
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>user</th>
                        <th>buku</th>
                        <th>penulis buku</th>
                        <th>tgl_pinjam</th>
                        <th>status peminjaman</th>
                        @if (\Auth()->user()->level == "admin") 
                        <th>action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->user_r->name }}</td>
                            <td>{{ $dt->buku_r->judul }}</td>
                            <td>{{ $dt->buku_r->penulis }}</td>
                            <td>{{ $dt->created_at }}</td>
                            @if( $dt->status == null )
                              <td><label class="btn  btn-flat ">Menunggu Verifikasi</label></td>
                            @elseif($dt->status == 1)
                              <td><label class="btn  btn-flat ">Disetujui</label></td>
                            @elseif($dt->status == 2)
                              <td><label class="btn  btn-flat ">Ditolak</label></td>
                              @elseif($dt->status == 3)
                              <td><label class="btn btn">Sudah Dikembalikan</label></td>
                            @endif
                            @if (\Auth()->user()->level == "admin") 
                            @if($dt->status == null)
                              <td>
                                <a href="{{ url('/pinjam/setujui/'.$dt->id)}}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i>Setujui</a>
                                <a href="{{ url('/pinjam/tolak/'.$dt->id)}}" class="btn btn-xs btn-danger btn-flat"><i class="fa"></i>Tolak</a>
                              </td>
                            @endif
                            @endif
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
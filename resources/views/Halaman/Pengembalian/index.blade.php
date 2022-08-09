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
            <h5 class="card-title">Pengembalian</h5>
          </div>
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Master Data</li>
              <li class="breadcrumb-item ">Pengembalian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
          </div>
        </div>
            <div class="box-header">      
            <div class="col-md-8 col-md-offset-2">
              <p>
                  <a href="{{ url('pengembalian') }}" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-sync-alt"></i> Refresh</a>
                </p>
            </div>
            <div class="table-responsive">
            <div class="card-body"> 
                   <table class="table table-hover" id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            @if (\Auth()->user()->level == "admin") 
                            <th>aksi</th>
                            @endif
                            <th>nama</th>
                            <th>email</th>
                            <th>buku</th>
                            <th>status</th>
                            <th>tgl_pinjam</th>
                            <th>tgl_kembali</th>
                            <th>cek</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                @if (\Auth()->user()->level == "admin") 
                                    <td>
                                @if($dt->cek == 1)
                                <a href="{{ url('pengembalian/cek/'.$dt->id) }}" class="btn btn-sm btn-success">-</a>
                                @else
                                <a href="{{ url('pengembalian/cek/'.$dt->id) }}" class="btn btn-sm btn-danger">Denda</a>
                                @endif
                                </td>
                                @endif
                                <td>{{ $dt->user_r->name }}</td>
                                <td>{{ $dt->user_r->email }}</td>
                                <td>{{ $dt->buku_r->judul }}</td>
                               
                                @if($dt->status == 1)
                                    <td><label class="btn btn">Sedang Dipinjam</label></td>    
                                @else
                                    <td><label class="btn btn">Sudah Dikembalikan</label></td>
                                @endif
                                <td>{{ $dt->created_at }}</td>
                                <td>{{ $dt->tgl_kembali }}</td>
                                <td><label class="btn btn-sm {{ ($dt->cek == 1) ? 'btn-danger' : 'btn-success' }}"> {{ ($dt->cek == 1) ? 'denda' : '-' }}</label></td>
                                @if($dt->status == 1)
                                <td>
                                    <a href="{{ url('pengembalian/'.$dt->id) }}" class="btn btn-primary btn-flat">Kembalikan</a>
                                </td>
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
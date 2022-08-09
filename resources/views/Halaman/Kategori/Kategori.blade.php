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
            <h5 class="card-title">Kategori Buku</h5>
          </div>
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Master Data</li>
              <li class="breadcrumb-item ">Kategori</li>
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
              @if (\Auth()->user()->level == "admin") 
            <div class="col-md-8 col-md-offset-2">
              <p>
                <a href="{{ url('kategori') }}" class="btn btn-flat btn-sm btn-warning "><i class="fas fa-sync-alt"></i>Refresh</a>
                  <a href="{{ url('tambahkategori') }}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Kategori</a>
              </p>
            </div>
             @endif
             <div class="table-responsive">
            <div class="card-body"> 
            <table class="table table-hover" id="table">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nama Kategori</th>
                      @if (\Auth()->user()->level == "admin") 
                      <th>Created At</th>
                      <th>Action</th>
                      @endif
                  </tr>
              </thead>
              <tbody>
                  @foreach($data as $e=>$dt)
                  <tr>
                      <td>{{ $e+1 }}</td>
                      <td>{{ $dt->nama }}</td>
                      @if (\Auth()->user()->level == "admin") 
                      <td>{{ $dt->created_at }}</td>
                      <td>
                        <div><a href="{{ url('editkategori/'.$dt->id) }}"   id="edit">
                          <i class="fas fa-edit"></i></a> 
                          <a href="{{ url('kategori/'.$dt->id) }}"  id="delete">
                          <i class="far fa-trash-alt"></i></div>
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
    <!-- /.content -->
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

 @section('scripts')

  
 @endsection

</body>
</html>
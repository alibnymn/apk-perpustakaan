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
            <h5 class="card-title"><h4>{{ $title }}</h4> </h5>
          </div>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Buku</li>
              <li class="breadcrumb-item ">Tambah Buku</li>
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
                <a href="javascript:history.back()" class="btn btn-sm btn-flat btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a>
            </p>
            </div>
        </div> 
        <div class="card-body">
              <div class="box-body">
                  <form role="form" method="post" action="{{ url('buku') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Judul Buku</label>
                              <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul Buku">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputEmail1">Penulis Buku</label>
                              <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" placeholder="Judul Buku">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Penerbit Buku</label>
                            <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" placeholder="Penerbit Buku">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Terbit</label>
                            <input type="date" name="tahun_terbit" class="form-control" id="exampleInputEmail1" placeholder="Tahun Terbit">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputEmail1">Stock Buku</label>
                              <input type="number" name="stock" class="form-control" id="exampleInputEmail1" placeholder="Stock Buku">
                          </div>
   
                          <div class="form-group">
                              <select class="form-control select2" name="kategori">
                                  <option selected="" disabled="">Pilih Kategori</option>
                                  @foreach($kategori as $kt)
                                  <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                                  @endforeach
                              </select>
                          </div>
   
                          <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" name="gambar" id="exampleInputFile">
   
                              <p class="help-block">Example block-level help text here.</p>
                          </div>
                      </div>
                      <!-- /.box-body -->
   
                      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
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


  
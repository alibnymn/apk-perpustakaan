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
            <h5 class="card-title"><h4>Edit Anggota</h4></h5>
          </div>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active ">Profil Anggota</li>
              <li class="breadcrumb-item ">Edit Anggota</li>
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

                    <form role="form" method="post" action="{{ url('profilanggota/'.$dt->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $dt->email }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="name" value="{{ $dt->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">kelas</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputPassword1" placeholder="level" value="{{ $dt->kelas }}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">jurusan</label>
                              <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1" placeholder="jurusan" value="{{ $dt->jurusan }}">
                          </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                      </div>
                            <!-- /.box-body --> 
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
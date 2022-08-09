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
  <!-- Wrapper -->
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
        <div class="row mb-5">
          <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Beranda Dasboard</h5>
          </div>
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card ">
      <div class="card-body ">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">  
            <!-- ./col -->
            <div class="content">
              <h3>Buku Populer</h3>
              <div class="row mt-4 mx-auto">
                  <div class="card mr-2 ml-2" style="width: 15rem;">
                      <img src="uploads/prog2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pemerograman</h5>
                        <p class="card-text"></p>
                        <a href="{{url('buku')}}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                      <img src="uploads/download (5).jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Desain Grafis</h5>
                        <p class="card-text"></p>
                        <a href="{{url('buku')}}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                      <img src="uploads/images.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Perkembangan Teknologi</h5>
                        <p class="card-text"></p>
                        <a href="{{url('buku')}}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                      <img src="uploads/watchdogs-4k-9gapztrp261t4war.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Manusia Peradaban</h5>
                        <p class="card-text"></p>
                        <a href="{{url('buku')}}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
              </div>
            </div>
        <!-- ./col -->
       </div> 
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

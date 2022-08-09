<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PERPUS GEMAS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!DOCTYPE html>
        <!--
        This is a starter template page. Use this page to start your new project from
        scratch. This page gets rid of all links and provides the needed markup only.
        -->
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
          
            <title>Perpus Gemas</title>
          
            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
            <!-- data table -->
            <link rel="stylesheet" href="{{asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
        <body class="hold-transition sidebar-mini">

    </head>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"><i class="fas fa-book"></i>PERPUS GEMAS</a>
          <form class="d-flex">
            {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" size="130px">
            <button class="btn btn-outline-success" type="submit">Search</button>  --}}
        </form>
    <button class="btn btn-outline-success"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Login</a></button>
        </div>
      </nav> 
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="row mt-4 mx-auto">
                    <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/prog2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Pemerograman</h5>
                          <p class="card-text"></p>
                          <a href="buku" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/download (5).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Desain Grafis</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/download (2).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">PJOK KLS 12</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/Sccess.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Petualangan Sang Azis</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                       <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/rainbow-circles-on-black-background-bi2falcffjsi5p4c.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Desain 3D</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                       <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/bukulogo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Indonesia Kelas XII</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/a.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Peristiwa 212</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/download.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Ragam Adat Suku Baduy</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/Poster CORONA1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Sukses Finansial</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                       <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/images.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Perkembangan Teknologi</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                       <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/spider-man-on-black-background-trfi8pwebvc9anp0.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Bahaya Pandemi Covid</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                      <div class="card mr-2 ml-2" style="width: 13rem;">
                        <img src="uploads/watchdogs-4k-9gapztrp261t4war.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Manusia Peradaban</h5>
                          <p class="card-text"></p>
                          <a href="login" class="btn btn-primary">Detail</a>
                        </div>
                      </div> 
                </div>
            </div>
        </div>
    </body>
</html>

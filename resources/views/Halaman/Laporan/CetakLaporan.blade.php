<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <body>
<head>
   @include('Template.head')
</head>
     <center>
<div class="card-body">
    <h4>{{$title}}</h4>
    <div class="card mr-2 ml-2" style="width: 50rem;">
     <div class="card-body">
        <h5 class="card-title">PERPUS GEMAS </h5>
     </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>kelas</th>
                <th>buku</th>
                <th>status</th>
                <th>created at</th>
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
    </center>
  @include('Template.script')
</body>
</html>
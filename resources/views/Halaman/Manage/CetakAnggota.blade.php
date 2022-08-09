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
<div class="card-body">
  <div class="row mt-4 mx-auto">
   <div class="card mr-2 ml-2" style="width: 20rem;">
    <div class="card-body">
      <h5 class="card-title">Kartu Perpustakaan</h5>
      <p class="card-text"><?php echo $dt['name']?></p>
  <table class="table table-bordered" >
  <tr>
    <td size="90">Nama</td>
    <td>: <?php echo $dt['name']?></td>
</tr>
<tr>
    <td>Email</td>
    <td>: <?php echo $dt['email']?></td>
</tr>
<tr>
    <td>Kelas</td>
    <td>: <?php echo $dt['kelas']?></td>
</tr>
<tr>
  <td>Jurusan</td>
  <td>: <?php echo $dt['jurusan']?></td>
</tr>
<tr>
    <td>Level</td>
    <td>: <?php echo $dt['level']?></td>
</tr>
<tr>
    <td>Password</td>
    <td>: 123</td>
</tr>
</table>
  </div>
</div>
  @include('Template.script')
</body>
</html>
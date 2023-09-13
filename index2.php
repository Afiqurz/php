<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('side_bar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      //meampilkan mahasiswa
      else if($_GET['page']=='data-mahasiswa'){
        include('data_mahasiswa.php');
      }
      //meampilkan kelas
      else if($_GET['page']=='data-kelas'){
        include('data_kelas.php');
      }
      //meampilkan edit mahasiswa
      else if($_GET['page']=='edit-data'){
        include('edit/edit_data.php');
      }
      //meampilkan siswa
      else if($_GET['page']=='data-siswa'){
        include('data_siswa.php');
      }
      //meampilkan edit siswa
      else if($_GET['page']=='edit-siswa'){
        include('edit/edit_siswa.php');
      }
      else if($_GET['page']=='data-guru'){
        include('data_guru.php');
      }
      
      else{
        include('data_kuliah.php');
      }
    }
      else{
      include('dashboard.php');}?>

  </div>

  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>

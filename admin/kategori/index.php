<?php
session_start();
if ( isset($_SESSION['email']) ) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>
<?php
include '../layouts/header.php';
?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <?php
        include '../layouts/messages.php';
        include '../layouts/notifications.php';
        include '../layouts/tasks.php';
        include '../layouts/user.php';
        ?>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= $_SESSION['foto'] ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php
    include '../layouts/sidebar.php';
    ?>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategori
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kategori</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Kategori</h3>
            <a href="http://localhost/adminlte/admin/kategori/create.php" class="btn btn-primary pull-right">Create</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
              <?php
      include '../../config/koneksi.php';
      $nomor = 1;
      $sql = "SELECT * FROM kategori ORDER BY id DESC";
      $result = mysqli_query($konek, $sql);
      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <?php 
        echo "<td>".$nomor++."</td>";
        echo "<td>".$row['nama']."</td>";
        ?>
        <td>
          <a href="http://localhost/adminlte/admin/kategori/edit.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-xs">edit</a>
          <a href="http://localhost/adminlte/admin/kategori/hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-xs">hapus</a>
        </td>
      </tr>
      <?php
        }
      } else {
      ?>
      <tr>
        <td colspan="3">Data not available</td>
      </tr>
      <?php
      }
      ?>
              
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php
include '../layouts/script.php';
?>
</body>
</html>

<?php
} else {
echo "Anda belum login, silahkan <a href='../index.php'>login</a>";
}
?>
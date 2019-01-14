<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="<?= $_SESSION['foto'] ?>" class="user-image" alt="User Image">
    <span class="hidden-xs"><?= $_SESSION['name'] ?></span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
      <img src="<?= $_SESSION['foto'] ?>" class="img-circle" alt="User Image">

      <p>
        <?= $_SESSION['name'] ?> - Web Developer
        <small>Member since Nov. 2012</small>
      </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
      <div class="row">
        <div class="col-xs-4 text-center">
          <a href="#">Followers</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Sales</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Friends</a>
        </div>
      </div>
      <!-- /.row -->
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="#" class="btn btn-default btn-flat">Profile</a>
      </div>
      <div class="pull-right">
        <a href="http://localhost/adminlte/admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>
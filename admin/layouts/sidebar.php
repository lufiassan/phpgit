<?php
$path_3 = 'kategori';
?> 
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        if($path_3 == 'index.php'){
          echo "<li class='active'>";
        }
        else{
          echo "<li>";
        }
        ?>
        
          <a href="http://localhost/adminlte/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php
        if($path_3 == 'kategori'){
          echo "<li class='active'>";
        }
        else{
          echo "<li>";
        }
        ?>
          <a href="http://localhost/adminlte/admin/kategori">
            <i class="fa fa-pie-chart"></i>
            <span>Kategori</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/adminlte/admin/artikel">
            <i class="fa fa-pie-chart"></i>
            <span>Artikel</span>
          </a>
        </li>      
</ul>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>
        <!-- Optionally, you can add icons to the links -->
        <li <?php if($page=='index') echo 'class="active"'; ?> ><a href="index.php"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li <?php if($page=='about') echo 'class="active"'; ?> ><a href="about.php"><i class="fa fa-link"></i> <span>Acerca de</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Temas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Tema 1</a></li>
            <li><a href="#">Tema 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

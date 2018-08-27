<?php
  $page = 'index';
?>

<!DOCTYPE html>
<html>
<head>
  <?php include "pages/head.html"; ?>
  <?php include "mexico_map/map_setup_css.php"; ?>
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <?php include "pages/header.html"; ?>
  <?php include "pages/sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General
        <small>Opciones</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <!-- Map html - add the below to your page -->
        <div class="jsmaps-wrapper" id="mexico-map"></div>
        <!-- End Map html -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "pages/footer.html"; ?>
  <?php include "pages/controlside.html"; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<?php include "mexico_map/map_setup_js.php"; ?>
<script type="text/javascript">

  $(function() {

    $('#mexico-map').JSMaps({
      map: 'mexico'
    });

  });

</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

<?php
include "pages/logged.php";
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
        Resumen General
        <small>Principales datos para acercarse al Ecosistema Emprendedor en los estados.</small>
      </h1>
      <!-- ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box" id="mapa">
        <div class="box-header with-border">
          <h3 class="box-title">Selección de Estado</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- Map -->
          <div class="jsmaps-wrapper" id="mexico-map"></div>
          <!-- /.Map -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Selecciona un estado para visualizar su información
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="box collapsed-box" id="caja-datos">
        <div class="box-header with-border">
          <h2 class="box-title" id="titulo-estado">Datos del Estado</h2>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Población</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3 id="poblacion">150</h3>
                      <p>Población</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3 id="municipios">150</h3>
                      <p>Municipios</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-university"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Dependencias</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-6 col-xs-6">
                  <h4 id="sedeco">SEDECO</h4>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                  <h4 id="coecyt">COECYT</h4>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Educación Media Superior</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3 id="ems_pob">150</h3>
                      <p>Estudiantes</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3 id="ems_prof">150</h3>
                      <p>Profesores</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3 id="ems_esc">150</h3>
                      <p>Escuelas</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-university"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Educación Superior</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3 id="es_pob">150</h3>
                      <p>Estudiantes</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3 id="es_prof">150</h3>
                      <p>Profesores</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3 id="es_esc">150</h3>
                      <p>Escuelas</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-university"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Centros de Investigación</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3 id="cit_pub">150</h3>
                      <p>Públicos</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-flask"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3 id="cit_priv">150</h3>
                      <p>Privados</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-flask"></i>
                    </div>

                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <!-- Default box -->
      <div class="box collapsed-box" id="estrategicos">
        <div class="box-header with-border">
          <h3 class="box-title" id="titulo-estado">Sectores Estratégicos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Actuales Económicos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-12 col-xs-12">
                  <p id="actuales"></p>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Futuros Económicos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-12 col-xs-12">
                  <p id="futuros"></p>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-body" id="datos-estado">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" id="titulo-estado">Prioritarios de Ciencia y Tecnología</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" id="datos-estado">
              <div class="row">
                <div class="col-lg-12 col-xs-12">
                  <p id="prioritarios"></p>
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

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
<!-- Actions -->
<script src="resources/variables.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

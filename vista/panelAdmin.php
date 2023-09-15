<?php
$seguimiento = ControladorSeguimiento::ctrCantidadEstados();
$proceso = ControladorSeguimiento::ctrCantidadProcesos();
$PendienteMaterial = ControladorSeguimiento::ctrCantidadPendienteMaterial();
$limpieza = ControladorSeguimiento::ctrCantidadLimpiezas();
$observacion = ControladorSeguimiento::ctrCantidadObservaciones();
$porinstalacion = ControladorSeguimiento::ctrCantidadPorInstalacion();
$pruebasfunop = ControladorSeguimiento::ctrCantidadPorPruebasFunc();
$verificacionfinal = ControladorSeguimiento::ctrCantidadVerFinal();
$terminado = ControladorSeguimiento::ctrCantidadTerminado();

$respuesta = ModeloGrafica::mdlMRBR();
$totalAD = '';
if (count($respuesta)) {
    $totalAD = $respuesta[0]['total'];
}
$respuestacpcp = ModeloGrafica::mdlCPCP();
$totalCPCP = '';
if (count($respuesta)) {
    $totalCPCP = $respuestacpcp[0]['total'];
}

$respuestatnrs = ModeloGrafica::mdlTNRs();
$totalTNRs = '';
if (count($respuesta)) {
    $totalTNRs = $respuestatnrs[0]['total'];
}

?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Panel Principal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-window-close"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">SIN EMPEZAR</span>
                            <span class="info-box-number">
                                <?php echo $seguimiento["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-tasks fa"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">EN PROCESO</span>
                            <span class="info-box-number">
                                <?php echo $proceso["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PENDIENTE MATERIAL</span>
                            <span class="info-box-number">
                                <?php echo $PendienteMaterial["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-magic"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PRUEBAS FUN/OP</span>
                            <span class="info-box-number">
                                <?php echo $pruebasfunop["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-list"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PARA INSPECCION</span>
                            <span class="info-box-number">
                                <?php echo $observacion["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">POR INSTALACION</span>
                            <span class="info-box-number">
                                <?php echo $porinstalacion["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PARA CIERRE DE AREA</span>
                            <span class="info-box-number">
                                <?php echo $limpieza["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">VERIFICACION FINAL</span>
                            <span class="info-box-number">
                                <?php echo $verificacionfinal["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="far fa-window-close"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">TERMINADO</span>
                            <span class="info-box-number">
                                <?php echo $terminado["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- chart -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Reportes Tarjetas MRBR <?php echo $totalAD; ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">

                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="report_tarjetas_mrbr1" height="200px"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#report_tarjetas_mrbr">
                                Barras
                            </button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#report_tarjetas_barra">
                                Pie
                            </button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#report_tarjetas_torta">
                                Doughnut
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Reportes Tarjetas CPCP <?php echo $totalCPCP; ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">

                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="reporte_tarjetas_cpcp1" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reporte_tarjetas_cpcp2">
                                Barras
                            </button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reporte_tarjetas_cpcp3">
                                Pie
                            </button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#reporte_tarjetas_cpcp4">
                                Doughnut
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Reportes Tarjetas TNRs <?php echo $totalTNRs; ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">

                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="reporte_tarjetas_tnrs1" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reportes_tarjetas_tnrs2">
                                Barras
                            </button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reportes_tarjetas_tnrs3">
                                Pie
                            </button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#reportes_tarjetas_tnrs4">
                                Doughnut
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart end -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->


<!-- Modal 1 -->
<div class="modal fade" id="report_tarjetas_mrbr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas MRBR <?php echo $totalAD; ?>
                <canvas id="report_tarjetas_mrbr2" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="report_tarjetas_barra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas MRBR <?php echo $totalAD; ?>
                <canvas id="report_tarjetas_mrbr4" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="report_tarjetas_torta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas MRBR <?php echo $totalAD; ?>
                <canvas id="report_tarjetas_mrbr3" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Modal end 1 -->

<!-- Modal 2 -->
<div class="modal fade" id="reporte_tarjetas_cpcp2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas CPCP <?php echo $totalCPCP; ?>
                <canvas id="report_tarjetas_cpcp2" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reporte_tarjetas_cpcp3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas CPCP <?php echo $totalCPCP; ?>
                <canvas id="report_tarjetas_cpcp3" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reporte_tarjetas_cpcp4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas CPCP <?php echo $totalCPCP; ?>
                <canvas id="report_tarjetas_cpcp4" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Modal end 2 -->

<!-- Modal 3 -->
<div class="modal fade" id="reportes_tarjetas_tnrs2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas TNRs 110
                <canvas id="reportes_tarjetas_tnr2" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reportes_tarjetas_tnrs3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas TNRs 110
                <canvas id="reportes_tarjetas_tnr3" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reportes_tarjetas_tnrs4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas TNRs 110
                <canvas id="reportes_tarjetas_tnr4" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Modal end 3 -->
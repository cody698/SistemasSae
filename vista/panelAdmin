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
                                <canvas id="sales-chart" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" onclick="AbrirGraficaMRBR()">Extender Grafica</button>
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
                                <canvas id="sales-chartcpcp" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" onclick="AbrirGraficaCPCP()">Extender Grafica</button>
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
                                <canvas id="sales-charttnrs" height="200"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" onclick="AbrirGraficaTNRs()">Extender Grafica</button>
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
<?php

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
                    <h1 class="m-0">INFORME AVANCE CP-3194</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaCPCP()">
                                    <span class="glyphicon glyphicon-signal"></span>TARJETAS DE CONTROL DE CORROSION (CPCP)
                                </a>
                            </h3>
                        </div>
                        <table id="DataTableCPCP" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">PARA CIERRE DE AREA</th>
                                    <th class="text-center">PRUEBAS FUN/OP</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">9</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">14</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">9</td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">10</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAGE
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">7</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">35</td>
                                    <td class="text-right">6</td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">9</td>
                                    <td class="text-right">61</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaMRBR()">
                                    <span class="glyphicon glyphicon-signal"></span>TARJETAS DE SERVICIO (MRBR)
                                </a>
                            </h3>
                        </div>
                        <table id="DataTableMRBR" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">PARA CIERRE DE AREA</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">12</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">4</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">14</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaTNRs()">
                                    <span class="glyphicon glyphicon-signal"></span>TARJETAS NO RUTINARIAS(TNR´s)
                                </a>
                            </h3>
                        </div>
                        <table id="DataTableTNRs" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">PENDIENTE</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">VERIFICACION</th>
                                    <th class="text-center">PENDIENTE COMP</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">POR INSTALACION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">10</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">13</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">21</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">22</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAJE
                                        </a>
                                    </td>
                                    <td class="text-right">8</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">23</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right">13</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">7</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">73</td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">110</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaAvancePorAreas()">
                                    <span class="glyphicon glyphicon-signal"></span>AVANCE POR AREAS
                                </a>
                            </h3>
                        </div>
                        <table id="AvancePorAreas" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TASK CARD's</th>
                                    <th class="text-center">TNR's</th>
                                    <th class="text-center">TOTAL TASK CARD's + TNR's</th>
                                    <th class="text-center">PORCENTAJE DE AVANCE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">17</td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">21</td>
                                    <td class="text-right">100%</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">13</td>
                                    <td class="text-right">25</td>
                                    <td class="text-right">73%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">22</td>
                                    <td class="text-right">34</td>
                                    <td class="text-right">92%</td>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">17</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">20</td>
                                    <td class="text-right">92%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAJE
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">16</td>
                                    <td class="text-right">23</td>
                                    <td class="text-right">84%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">11</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">18</td>
                                    <td class="text-right">100%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">23</td>
                                    <td class="text-right">26</td>
                                    <td class="text-right">48%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">16</td>
                                    <td class="text-right">19</td>
                                    <td class="text-right">85%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">82</td>
                                    <td class="text-right">110</td>
                                    <td class="text-right">192</td>
                                    <td class="text-right">0</td>
                                </tr>
                            </tbody>
                        </table>
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
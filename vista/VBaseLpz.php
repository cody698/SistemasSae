  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Base La Paz</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <table id="DataTableBaseLpz" class="table table-bordered table-striped">
                  <thead>
                      <a class="btn btn-primary ml-2 mr-2 mb-2" onclick="MNuevoBaseLpz()"><i class="fas fa-save"> Agregar</i></a>
                      <a class="btn btn-success ml-2 mr-2 mb-2" href="vista/reportes/repSemanalBaselpz.php" target="_blank"><i class="fas fa-file-excel"> Exportar</i></a>
                      <tr>
                          <th>FECHA DEL VUELO</th>
                          <th>EXPLOTADOR</th>
                          <th>ARRIBÓ REAL</th>
                          <th>SALIDA REAL</th>
                          <th>SE REALIZÓ</th>
                          <th>OT SAE</th>
                          <th>NOTA</th>
                          <th>ACCIONES</th>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $baselpz = ControladorBaseLaPaz::ctrInfoBasesLapaz();
                        foreach ($baselpz as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["fech_vuelo_baselpz"]; ?></td>
                              <td><?php echo $value["explotador_baselpz"]; ?></td>
                              <td><?php echo $value["arriba_real_baselpz"]; ?></td>
                              <td><?php echo $value["salida_real_baselpz"]; ?></td>
                              <td><?php echo $value["se_realizo_baselpz"]; ?></td>
                              <td><?php echo $value["ot_sae_baselpz"]; ?></td>
                              <td><?php echo $value["nota_baselpz"]; ?></td>
                              <td>
                                  <div class="btn-group ">
                                      <button class="btn btn-secondary btn-sm" onclick="MVerBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning btn-sm" onclick="MEditarBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger btn-sm" onclick="MEliBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                      <a class="btn btn-sm btn-success" href="vista/reportes/repOrdenTrabajo.php?id=<?php echo $value["id_baselpz"]; ?>" target="_blank"><i class="fas fa-file-excel"></i></a>
                                  </div>
                              </td>
                          </tr>
                      <?php
                        }
                        ?>
                  </tbody>

              </table>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
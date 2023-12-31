<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegControlHerramienta" ||
    $ruta["query"] == "ctrEditControlHerramienta" ||
    $ruta["query"] == "ctrRegRegistrosControlHerramientas" ||
    $ruta["query"] == "ctrRepHerramientas" ||
    $ruta["query"] == "ctrRegDatosInforme" ||
    $ruta["query"] == "ctrDevolucionHerramienta" ||
    $ruta["query"] == "ctrRegLogHerramientasCalibradas" ||
    $ruta["query"] == "ctrDevolucionHerrCalibrada" ||
    $ruta["query"] == "ctrEliControlHerramienta"
  ) {
    $metodo = $ruta["query"];
    $controlherramienta = new ControladorHerramientas();
    $controlherramienta->$metodo();
  }
}

class ControladorHerramientas
{

  static public function ctrInfoControlHerramientas()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramientas();
    return $respuesta;
  }
  
  //por ubicacion
  static public function ctrInfoControlHerramientasUbic()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramientasUbic();
    return $respuesta;
  }

  static public function ctrInfoControlEnvio()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlEnvio();
    return $respuesta;
  }

  static public function ctrInfoControlEnvioEstado($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlEnvioEstado($id);
    return $respuesta;
  }



  static public function ctrRegControlHerramienta()
  {
    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $obControlHerramientas = $_POST["obControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];

    $data = array(
      "desControlHerramientas" => $_POST["desControlHerramientas"],
      "pnControlHerramientas" => $_POST["pnControlHerramientas"],
      "pnaltControlHerramientas" => $_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas" => $_POST["numserieControlHerramientas"],
      "codigoControlHerramientas" => $_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas" => $_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas" => $_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas" => $_POST["unidadControlHerramientas"],
      "obControlHerramientas" => $_POST["obControlHerramientas"],
      "ubicacionControlHerramientas" => $_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas" => $_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas" => $_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas" => $_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas" => $_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas" => $_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas" => $_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas" => $_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas" => $_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas" => $_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas" => $_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas" => $_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas" => $_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas" => $_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas" => $_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlRegControlHerramientas($data);
    echo $respuesta;
  }

  static public function ctrInfoControlHerramienta($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramienta($id);
    return $respuesta;
  }

  static public function ctrEditControlHerramienta()
  {

    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $obControlHerramientas = $_POST["obControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];
    $data = array(
      "idControlHerramientas" => $_POST["idControlHerramientas"],
      "desControlHerramientas" => $_POST["desControlHerramientas"],
      "pnControlHerramientas" => $_POST["pnControlHerramientas"],
      "pnaltControlHerramientas" => $_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas" => $_POST["numserieControlHerramientas"],
      "codigoControlHerramientas" => $_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas" => $_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas" => $_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas" => $_POST["unidadControlHerramientas"],
      "obControlHerramientas" => $_POST["obControlHerramientas"],
      "ubicacionControlHerramientas" => $_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas" => $_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas" => $_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas" => $_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas" => $_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas" => $_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas" => $_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas" => $_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas" => $_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas" => $_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas" => $_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas" => $_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas" => $_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas" => $_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas" => $_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlEditControlHerramienta($data);
    echo $respuesta;
  }

  static public function ctrEliControlHerramienta()
  {
    require "../modelo/controlherramientasModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloControlHerramientas::mdlEliControlHerramienta($data);

    echo $respuesta;
  }

  static public function ctrRegRegistrosControlHerramientas()
  {
    require_once "../modelo/controlherramientasModelo.php";

    $data = array(
      "registros" => $_FILES['dataControlHerra']
    );

    $respuesta = ModeloControlHerramientas::mdlRegRegistrosControlHerramientas($data);
    echo $respuesta;
  }

  static public function ctrRepHerramientas()
  {
    require "../modelo/controlherramientasModelo.php";

    $nomHerramienta = $_POST["nomHerramienta"];
    $data = array(
      "nomHerramienta" => $nomHerramienta
    );
    $respuesta = ModeloControlHerramientas::mdlRepHerramienta($data);
    foreach ($respuesta as $value) {
?>

      <tr>
        <td><?php echo $value["id_controlherramientas"]; ?></td>
        <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
        <td><?php echo $value["pn_controlherramientas"]; ?></td>
        <td><?php echo $value["numserie_controlherramientas"]; ?></td>
        <td><?php echo $value["codigo_controlherramientas"]; ?></td>
        <td><?php echo $value["fechacali_controlherramientas"]; ?></td>
        <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
        <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>
        <td><?php echo $value["numcarpeta_controlherramientas"]; ?></td>
      </tr>


    <?php

    }
    ?>
    <script>
      $(function() {
        $("#DataTableHerramientas").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
        }).buttons().container().appendTo('#DataTableHerramientas_wrapper .col-md-6:eq(0)');

      });
    </script>
<?php
  }

  static public function ctrHerramientas($herramienta)
  {
    $respuesta = ModeloControlHerramientas::mdlHerramientas($herramienta);
    return $respuesta;
  }

  static public function ctrPorHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlPorHerramientas($id);
    return $respuesta;
  }

  static public function ctrSelecHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlSelecHerramientas($id);
    return $respuesta;
  }

  static public function ctrRegDatosInforme()
  {
    require "../modelo/controlherramientasModelo.php";
    $data = array(
      "seleccionados" => $_POST['seleccionados'],
      "fechaInforme" => $_POST['fechaInforme'],
      "numInforme" => $_POST['numInforme'],
      "respAlmacen" => $_POST['respAlmacen'],
      "repTecnico" => $_POST['repTecnico'],
      "encargadoInforme" => $_POST['encargadoInforme'],
      "asuntoInforme" => $_POST['asuntoInforme'],
      "descInforme" => $_POST['descInforme'],
    );
    $respuesta = ModeloControlHerramientas::mdlRegDatosInforme($data);
    echo $respuesta;
  }

  static public function ctrInfoHerramienta()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoHerramienta();
    return $respuesta;
  }

  static public function ctrInfoInforme($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoInforme($id);
    return $respuesta;
  }

  static public function ctrInfoHerraCalibradaSelec($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoHerraCalibradaSelec($id);
    return $respuesta;
  }

  /*====================
    Registro nuevo Log HERRAMIENTAS CALIBRADAS
    =====================*/
  static public function ctrRegLogHerramientasCalibradas()
  {
    session_start();
    require_once "../modelo/controlherramientasModelo.php";

    $cantidad = $_POST['cantidadHerramienta'];
    $nomLog = $_POST['nomLog'];
    $observacionesLog = $_POST['observacionesLog'];
    $nomServicio = $_POST['nomServicio'];
    $nomHerramienta = $_POST['nomHerramienta'];
    $id = $_POST['idHerramientas'];

    //uniendo los datos en arreglos asociativos
    $arregloCarrito = [];
    for ($i = 0; $i < count($id); $i++) {
      $arregloItem = array(
        "cantidad" => $cantidad[$i],
        "id" => $id[$i]
      );
      array_push($arregloCarrito, $arregloItem);
    }

    /* require '../modelo/controlherramientasModelo.php'; */
    foreach ($arregloCarrito as $value) {
      $idProd = $value['id'];
      $cantidadAlmacen = ModeloControlHerramientas::mdlInfoHerramientaCalibrada($idProd);

      $stock = $cantidadAlmacen['cantidad_controlherramientas'];
      $stockFinal = $stock - $value['cantidad'];

      $datos = array(
        "id" => $idProd,
        "cantidad" => $stockFinal
      );
      ModeloControlHerramientas::mdlActualizarStockCalibrada($datos);
    }

    $data = array(
      "nomLog" => $nomLog,
      "observacionesLog" => $observacionesLog,
      "nomServicio" => $nomServicio,
      "idUsuario" => $_SESSION["id"],
      "detalle" => $arregloCarrito
    );

    /* var_dump($nomLog); */
    $respuesta = ModeloControlHerramientas::mdlRegLogHerramientaCalibrada($data);
    echo $respuesta;
  }

  /*==========================
    Informacion de Log Salidas Clalibracion todos 
    ============================*/
  static public function ctrLogHerraCalibradas()
  {
    $respuesta = ModeloControlHerramientas::mdlLogHerraCalibradas();
    return $respuesta;
  }

  static public function ctrInfoLogHerraCalibrada($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoLogHerraCalibrada($id);
    return $respuesta;
  }

  static public function ctrInfoLogHerraDesc($value)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoLogHerraDesc($value);
    return $respuesta;
  }

  static public function ctrInfoUsuarioLog($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoUsuarioLog($id);
    return $respuesta;
  }

  static public function ctrDevolucionHerrCalibrada()
  {
    require_once "../modelo/controlherramientasModelo.php";

    $idPrestamo = $_POST["idPrestamo"];
    $idHerramientas = $_POST["ids"];
    $cantHerramienta = $_POST["cantidad"];
    $cantActualHerramienta = $_POST["cantidadActual"];

    $usuTecnico = $_POST['usuTecnico'];
    $usuEncargado = $_POST['usuEncargado'];
    $observacionesLog = $_POST['observacionesLog'];

    //uniendo los datos en arreglos asociativos donde ids y cantidad son arreglos asociativos
    $arregloCarrito2 = [];
    for ($i = 0; $i < count($idHerramientas); $i++) {
      $arregloItem = array(
        "cantidad" => $cantActualHerramienta[$i] - $cantHerramienta[$i],
        "id" => $idHerramientas[$i]
      );
      array_push($arregloCarrito2, $arregloItem);
    }

    //uniendo los datos para actualizar stock en herramientas
    $arregloCarrito3 = [];
    for ($i = 0; $i < count($idHerramientas); $i++) {
      $arregloItems = array(
        "cant" => $cantHerramienta[$i],
        "ids" => $idHerramientas[$i]
      );
      array_push($arregloCarrito3, $arregloItems);
    }

    $data = array(
      "idPrestamo" => $idPrestamo,
      "arregloCarrito2" => $arregloCarrito2
    );
    //=================> enviar datos para logDevolucion
    $data2 = array(
      "idPrestamo" => $idPrestamo,
      "usuTecnico" => $usuTecnico,
      "usuEncargado" => $usuEncargado,
      "observacionesLog" => $observacionesLog,
      "arregloCarrito3" => $arregloCarrito3
    );

    $respuestaDev = ModeloControlHerramientas::mdlLogDevolucionCalibrada($data2);

    $respuesta = ModeloControlHerramientas::mdlDevolucionHerramientaCalibrada($data);
    if ($respuesta = "ok") {
      for ($i = 0; $i < count($arregloCarrito3); $i++) {
        $id = $arregloCarrito3[$i]['ids'];
        $cantidad = $arregloCarrito3[$i]['cant'];
        $respuestaEstado = ModeloControlHerramientas::mdlActualizaStock($id, $cantidad);
      }
      echo $respuesta;
    }
  }
  /* ============================================
    INFORMACION DE TODAS LAS DEVOLUCIONES CALIBRADAS
    =============================================== */
  static public function ctrInfoLogDevCalibradas()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoLogDevCalibradas();
    return $respuesta;
  }

  static public function ctrInfoLogDevCalibrada($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoLogLogDevCalibrada($id);
    return $respuesta;
  }

  static public function ctrInfoLogCalibrada($value)
    {
        $respuesta = ModeloControlHerramientas::mdlInfoLogCalibrada($value);
        return $respuesta;
    }
}

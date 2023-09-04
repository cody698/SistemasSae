<?php
require_once "conexion.php";

class ModeloInformeAvance
{
  static public function mdlCantidadCpcpAla()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzones()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabina()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenaje()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselaje()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulica()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotores()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminados()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='TERMINADO' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='EN PROCESO' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA CIERRE DE AREA' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajePruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajePruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PRUEBAS FUN/OP' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA INSPECCION' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

}

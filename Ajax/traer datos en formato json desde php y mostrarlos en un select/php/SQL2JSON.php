<?php
include '../conexion/conexionbd.php';

@$consulta = $_POST['ConsultaSQL'];

$vehiculos = array();
/**
 Tutorial importante

https://makitweb.com/return-json-response-ajax-using-jquery-php/

 */

$query = $conexion->query($consulta);

 $conteo = $query->rowCount();

 if( $conteo > 0)
 {

   while($array = $query->fetch(PDO::FETCH_LAZY) )
   {
     /*
       echo $array->id . " \n";
       echo $array->Tipo . "\n";
       echo $array->Imagen . "\n";
       */


    $vehiculos[] = array('id' => $array['id'],
                       'Tipo' => $array['Tipo'],
                       'Imagen' => $array['Imagen'],
                       'KmGal' => $array['KmGal'],
                       'MtoLlantas' => $array['MtoLlantas'],
                       'MtoAceite' => $array['MtoAceite'],
                       'MtoFiltros' => $array['MtoOtros'],
                       'MtoOtros' => $array['MtoOtros'],
                       'CategoriaPeajeA' => $array['CategoriaPeajeA'],
                       'CategoriaPeajeB' => $array['CategoriaPeajeB'],
                       'CategoriaPeajeC' => $array['CategoriaPeajeC'],
                       'CategoriaPeajeC' => $array['CategoriaPeajeE'],
                       'CategoriaPeaje1' => $array['CategoriaPeaje1'],
                       'CategoriaPeaje2' => $array['CategoriaPeaje2'],
                       'CategoriaPeaje3' => $array['CategoriaPeaje3'],
                       'CategoriaPeaje4' => $array['CategoriaPeaje4'],
                      );

       echo json_encode($vehiculos);
   }

}

?>

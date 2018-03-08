<?php
/**
* @Project Transcarga
* @copyright (c) 2017 - 2018
* @author David Fernando Ramirez Gonzalez <david.f.r91@hotmail.com>
* @license GNU-GPL  http://www.gnu.org/licenses/ http://es.wikipedia.org/wiki/GNU_General_Public_License
* @since Version 2.0
*/


include './bd/conexion.php';
//extract($_REQUEST);

@$tiposervicio = $_POST["t"];
@$mododeservicio = $_POST["m"];

/*
if (isset($tiposervicio) && isset($mododeservicio))
{
    echo $tiposervicio." y ". $mododeservicio;
}
*/


$estadodeoferta = "activa";
$valordeoferta = "200.000";


  $sqlcrearoferta = "INSERT INTO ofertasdetransportistas(estadodeoferta,valordeoferta,tipodeservicio,mododetransporte)
                     VALUES('".$estadodeoferta."', '".$valordeoferta."', '".$tiposervicio."', '".$mododeservicio."' )  ";  //  //


                            $queryregistro = $conexion->query($sqlcrearoferta);


                             if($queryregistro)
                             {
                                echo "Oferta creada";
                             } 

?>

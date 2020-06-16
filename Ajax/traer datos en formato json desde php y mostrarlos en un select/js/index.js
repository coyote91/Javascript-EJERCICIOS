/**
 Tutorial importante

https://makitweb.com/return-json-response-ajax-using-jquery-php/

 */

//Variables Globales

var ResultSQL = "";
var CodVehiculo = 1;

function CargarDatos(){
	CargarVehiculos();
  //  SQLBD();
}


function CargarVehiculos() {
    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var Vehiculos = [];
            var jsonResponse = xmlhttp.responseText;
            var Objeto = JSON.parse(jsonResponse);

        /*  for (var carro in Objeto)
          {
             console.log(Objeto[carro]);
          }  */


             for (var i = 0; i < Objeto.length; i++)
             {


                   Vehiculos[i] = {
                                       Tipo: Objeto[i].Tipo,
                                       Imagen: Objeto[i].Imagen,
                                       KmGal: parseFloat(Objeto[i].KmGal),
                                       MtoLlantas: parseFloat(Objeto[i].MtoLlantas),
                                       MtoAceite: parseFloat(Objeto[i].MtoAceite),
                                       MtoFiltros: parseFloat(Objeto[i].MtoFiltros),
                                       MtoOtros: parseFloat(Objeto[i].MtoOtros),
                                       CategoriaPeajeA: parseInt(Objeto[i].CatPeajeA),
                                       CategoriaPeajeB: parseInt(Objeto[i].CatPeajeB),
                                       CategoriaPeajeC: parseInt(Objeto[i].CatPeajeC),
                                       CategoriaPeajeE: parseInt(Objeto[i].CatPeajeE),
                                       CategoriaPeaje1: parseInt(Objeto[i].CatPeaje1),
                                       CategoriaPeaje2: parseInt(Objeto[i].CatPeaje2),
                                       CategoriaPeaje3: parseInt(Objeto[i].CatPeaje3),
                                       CategoriaPeaje4: parseInt(Objeto[i].CatPeaje4),
                                 }
             }


             //Inicializar menú desplegable de selección de vehículo
               //var myParent = document.body;
               var Hijo;

               var Padre = document.getElementById("SelVehiculo");
                   //myParent.appendChild(select);

                 //

               // create and append the options
               for(var j = 0; j < Vehiculos.length; j++)
               {
                 Hijo = document.createElement("option");
                 Hijo.value = Vehiculos[j].Tipo;
                 //Hijo.text = Vehiculos[j].Tipo;
                 Hijo.appendChild(document.createTextNode(Vehiculos[j].Tipo));
                 Padre.appendChild(Hijo);

               }
             document.getElementById("SelVehiculo").options.selectedIndex = 1;


        } // END IF
    }
    var ConsultaSQL = "SELECT * FROM Vehiculos";
    ConsultaSQL = "ConsultaSQL=" + ConsultaSQL;
    xmlhttp.open("POST","./php/SQL2JSON.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // Establecer cabeceras de petición
    xmlhttp.send(ConsultaSQL);
}

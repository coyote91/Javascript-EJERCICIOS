

function listatiposervicio()
{

  var selectservicio = document.getElementById("tiposervicio");
  var idservicio = selectservicio.options[selectservicio.selectedIndex].value;

  var tipodeservicio = selectservicio.options[selectservicio.selectedIndex].text

   crearoferta(tipodeservicio);

  //console.log( selectservicio.options[selectservicio.selectedIndex].text );

}


function listamodoservicio(){

  var selectmododeservicio = document.getElementById("modoservicio");

  var idmododeservicio = selectmododeservicio.options[selectmododeservicio.selectedIndex].value;

  var mododeservicio = selectmododeservicio.options[selectmododeservicio.selectedIndex].text

   crearoferta(mododeservicio);

  console.log( selectmododeservicio.options[selectmododeservicio.selectedIndex].text );


}



function objetoAjax(){
      	var xmlhttp=false;
      	try {
      		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
      	} catch (e) {

      	try {
      		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      	} catch (E) {
      		xmlhttp = false;
      	}
      }

      if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      	  xmlhttp = new XMLHttpRequest();
      	}
      	return xmlhttp;

} //END OBJETO AJAX



var btncrearoferta = document.getElementById("btncrearoferta");
    btncrearoferta.addEventListener("click", function()
                                              {

                                                  crearoferta();

                                                });


function crearoferta()//
{

    //var idanuncio = document.getElementById('idanuncio').value
    //alert(idanuncio)
      var selectservicio = document.getElementById("tiposervicio");
      var selectmododeservicio = document.getElementById("modoservicio");

  var tipodeservicio = selectservicio.options[selectservicio.selectedIndex].text
      var mododeservicio = selectmododeservicio.options[selectmododeservicio.selectedIndex].text

    ajax=objetoAjax();

    ajax.open("POST", "./query.php",true); //false
    ajax.onreadystatechange=function() {
          if (ajax.readyState==4 && ajax.status == 200)
          {
              document.getElementById("responseoferta").innerHTML =  ajax.responseText;

        }
        else if(ajax.readyState==1)
        {
          document.getElementById('responseoferta').innerHTML = "Cargando...";

        }
   }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("t="+tipodeservicio+"&m="+mododeservicio); //null    //

}

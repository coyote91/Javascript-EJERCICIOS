<?php


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/index.css">
  </head>
  <body>


    <!-- TIPO DE SERVICIO  --->

      <label for="tiposervicio">Tipo</label>
      <select name="tiposervicio" id="tiposervicio" > <!-- onchange="listatiposervicio()" -->

           <optgroup label="Tipo del servicio">
              <option value="43">Servicio de carga</option>
              <option value="44">Autoservicio</option>
              <option value="15">Cuidado especial</option>
              <option value="16">Servicio de carga para mudanza</option>
              <option value="17">Autoservicio de Mudanza</option>
              <option value="18">Otros</option>

         </optgroup>

      </select>

      <!-- MODO DEL SERVICIO --->

      <label for="modoservicio">Modo</label>
      <select name="modoservicio" id="modoservicio"  >  <!-- onchange="listamodoservicio()" -->

           <optgroup label="Modo del servicio">

               <option value="1">Camionaje</option>
               <option value="2">Aéreo</option>
               <option value="3">Ferrocarril</option>
               <option value="4">Océano</option>
               <option value="5">Intermodal</option>

           </optgroup>

      </select>



                                      <button type="button" name="Crear oferta" id="btncrearoferta" > Crear oferta </button>



  <div id="responseoferta"></div>


 <script src="./js/index.js" charset="utf-8"></script>

  </body>
</html>

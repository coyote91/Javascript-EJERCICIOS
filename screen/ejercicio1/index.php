<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">

      #demo{

          width: 500px;
          height: 500px;
          background-color: coral;
          color: white;

      }


    </style>

  </head>
  <body>

  <!-- la fucnion screen me muestra el ancho de la pantalla o monitor del visitante  -->

    <p id="demo"></p>

    <script>
    document.getElementById("demo").innerHTML = "Screen width is " + screen.width;

    document.getElementById("demo").innerHTML = "Screen Height: " + screen.height;
    </script>



  </body>
</html>

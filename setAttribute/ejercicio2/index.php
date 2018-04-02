<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



  <script type="text/javascript">

  var z = document.createElement("INPUT");

     z.setAttribute("type", "email");
     z.setAttribute("value", " ");
     z.setAttribute("name","correo");
     z.setAttribute("id","correo");
     z.setAttribute("class", "textbox");
     z.required = true;
     z.setAttribute("oninput", "this.className = ''");

     var contcorreo = document.getElementById("contcorreo");
     contcorreo.appendChild(z);


  </script>

  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <select id="SelVehiculo" class="" name="">

  </select>



<script type="text/javascript">


      var myParent = document.body;

      //Create array of options to be added
      var array = ["Volvo","Saab","Mercades","Audi"];

      //Create and append select list
        //var selectList = document.createElement("select");

      var selectList = document.getElementById("SelVehiculo");
      /* selectList.id = "mySelect";*/
      myParent.appendChild(selectList);

      //Create and append the options
      for (var i = 0; i < array.length; i++) {
          var option = document.createElement("option");
          option.value = array[i];
          option.text = array[i];
          selectList.appendChild(option);
      }


</script>

  </body>
</html>

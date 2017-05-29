<!DOCTYPE html>
<html>
<head>
<style>
#myDIV {
    height: 250px;
    width: 250px;
    overflow: auto;
}

#content {
    height: 800px;
    width: 2000px;
    background-color: coral;
}
</style>
</head>
<body>


  <!--

   EJERCICIO 2 con jquery :

   https://desarrollofrontend.com/scrolltop-mostrar-un-elemento-al-llegar-a-otro/

  --->

<p>Scroll inside the div element to display the number of pixels the content of div is scrolled horizontally and vertically.</p>

<div id="myDIV" onscroll="myFunction()">
  <div id="content">Scroll inside me!</div>
</div>

<p id="demo"></p>

<script>
function myFunction() {
    var elmnt = document.getElementById("myDIV");
    var x = elmnt.scrollLeft;
    var y = elmnt.scrollTop;
    document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
}
</script>

</body>
</html>

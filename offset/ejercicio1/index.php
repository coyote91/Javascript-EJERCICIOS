<!DOCTYPE html>
<html>
<head>
<style>
#test {
  top:300px;
  left: 100px;
  margin: 10px;
  padding: 10px;
  width: 490px;
  position: relative;
  border: 5px solid black
}
</style>
</head>
<body>


  <!-- Con este método OFFSET podemos establecer las coordenadas referente a top y left de un elemento  -->

<div id="test">
  <p>Click the button to get offsetLeft for the test div.</p>
  <p><button onclick="myFunction()">Try it</button></p>
  <p> <span id="demo"></span></p>
</div>

<script>
function myFunction() {
    var testDiv = document.getElementById("test");
    document.getElementById("demo").innerHTML = " Distancia de lado superior " + testDiv.offsetTop +  " y distancia de lado izquierdo " + testDiv.offsetLeft;
}
</script>

</body>
</html>

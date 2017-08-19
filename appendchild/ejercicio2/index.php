<!DOCTYPE html>
<html>
<body>

<!--- CODIGO PERMITE INTERCAMBIAR DE POSICION DE UN ELEMENTO O FRASE POR UNA ANTERIOR -->

<div id="div1">
<p id="p1">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>

<script>
var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);

// ahora ubico el nuevo elemento creado en la posicion que quiero

var element = document.getElementById("div1");
var child = document.getElementById("p2");
element.insertBefore(para,child);
</script>

</body>
</html>

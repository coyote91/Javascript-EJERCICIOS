<!DOCTYPE html>
<html>
<head>
<style>
.democlass {
    color: red;
}
</style>
</head>
<body>

<h1 class="democlass">Hello World</h1>

<p>Click the button to display the value of the class attribute of the h1 element.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementsByTagName("H1")[0].getAttribute("class");
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>

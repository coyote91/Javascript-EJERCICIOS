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

<h1>Hello World</h1>

<p>Click the button to add a class attribute with the value of "democlass" to the h1 element.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    document.getElementsByTagName("H1")[0].setAttribute("class", "democlass");
}
</script>

</body>
</html>

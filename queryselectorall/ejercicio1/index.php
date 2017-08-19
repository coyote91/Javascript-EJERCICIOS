<!DOCTYPE html>
<html>
<body>

<h2 class="example">A heading with class="example"</h2>
<p class="example">A paragraph with class="example".</p>
<span class="example">mensaje</span>

<p>Click the button to add a background color to the first element in the document with class="example" (index 0).</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> The querySelectorAll() method is not supported in Internet Explorer 8 and earlier versions.</p>

<script>

//El método querySelectorAll () devuelve todos los elementos del documento que coincide con un selector CSS especificado

function myFunction() {
    var x = document.querySelectorAll(".example");
    x[2].style.backgroundColor = "red";
}
</script>

</body>
</html>

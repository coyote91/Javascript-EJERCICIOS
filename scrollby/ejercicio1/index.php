<!DOCTYPE html>
<html>
<head>
<style>
body {
    width: 5000px;
}

button {
    position: fixed;
}
</style>
</head>
<body>

<p>Click the button to scroll the document window by 100px horizontally.</p>

<p>Look at the horizontal scrollbar to see the effect.</p>

<button onclick="scrollWin()">Click me to scroll horizontally!</button><br><br>

<script>
function scrollWin() {
    window.scrollBy(100, 0);
}
</script>

</body>
</html>

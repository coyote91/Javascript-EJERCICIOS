<!DOCTYPE html>
<html>
<head>
<style>
body {
    height: 7500px;
    width: 5000px;
}

button {
    position: fixed;
}
</style>
</head>
<body>

<p>Click one of the buttons (multiple times) to scroll the document window.</p>
<p>Look at each scrollbar to see the effect.</p>

<button onclick="scrollWin(0, 50)">Scroll down</button><br><br>

<button onclick="scrollWin(0, -50)">Scroll up</button><br><br>

<button onclick="scrollWin(100, 0)">Scroll right</button><br><br>

<button onclick="scrollWin(-100, 0)">Scroll left</button><br><br>

<script>
function scrollWin(x, y) {
    window.scrollBy(x, y);
}
</script>

</body>
</html>

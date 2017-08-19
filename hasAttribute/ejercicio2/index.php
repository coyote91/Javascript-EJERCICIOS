<!DOCTYPE html>
<html>
<body>

<a id="myAnchor" href="https://www.w3schools.com" target="_blank">Go to w3schools.com</a>.

<p>Click the button to find out if the a element has a "target" attribute. If so, change the value of the target attribute to "_self_" instead of "_blank".</p>

<p>Try clicking on the link before and after you have clicked the button.</p>

<button id="myBtn" onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> Internet Explorer 8 and earlier does not support the hasAttribute() and setAttribute() methods.</p>

<script>
function myFunction() {
    var x = document.getElementById("myAnchor");

    if (x.hasAttribute("target")) {
        x.setAttribute("target", "_self");
    }
}
</script>

</body>
</html>

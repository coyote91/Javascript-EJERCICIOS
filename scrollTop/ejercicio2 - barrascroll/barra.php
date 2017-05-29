<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	 <link rel="stylesheet" href="barra.css" />

	 <script type="text/javascript">



function window_onload() {
  window.addEventListener("scroll",navbar_reset_top,false);
}

var navbar_top=100;

function navbar_reset_top() {
  var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
  if(scrollTop>navbar_top&&navbar.className==="navbar_absolute") {
    document.getElementById("navbar").className="navbar_fixed";
  }
  else if(scrollTop<navbar_top&&navbar.className==="navbar_fixed") {
    document.getElementById("navbar").className="navbar_absolute";
  }
}

</script>
	
	
	
</head>
<body  onload="javascript: window_onload();">
	
	
<div id="navbar" class="navbar_absolute">
   <div class="flechaizquierda">
   
   </div>
   
   
    <div class="flechaderecha"></div>
   
</div>
<div class="content">Content

 <div class="icono">
 
 </div>


</div>

</body>
</html>
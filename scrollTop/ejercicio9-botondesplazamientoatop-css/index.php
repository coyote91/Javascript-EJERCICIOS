<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

 <style media="screen">
/*
 .volver {
	color: #fff;
}
*/
.volver:hover{
  color: #FFF;
  opacity: 1;
  filter: alpha(opacity=1); /* For IE8 and earlier */
}

.volver i{
  color: #FFF;
}



.volver {
	width: 50px;
	height: 50px;
	position: fixed;
	cursor: pointer;
	bottom: 50px;
	right: 50px;
	-webkit-border-radius: 300px;
	border-radius: 300px;
	opacity: 0.4;
	filter: alpha(opacity=40);
	color: #fff;
	line-height: 50px;
	text-align: center;
	color: white;
}

.volver {
	background-color: #bc0000;
	border-color: #ef0000;
}


.fa-arrow-up::before {
	content: "\f062";

  /*http://fontawesome.io  libraria para usar los icons*/
}

.fa {
	display: inline-block;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

 </style>

  </head>
  <body>


<a href="#logo" class="volver">
  <i class="fa fa-arrow-up"></i>
</a>



  </body>
</html>

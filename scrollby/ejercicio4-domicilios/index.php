<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body {
    position: relative;
}
.affix {
    top: 160px;
}
div.col-sm-9 div {
    height: 550px;
    font-size: 28px;
}
#section1 {color: #fff; background-color: #1E88E5;}
#section2 {color: #fff; background-color: #673ab7;}
#section3 {color: #fff; background-color: #ff9800;}
#section41 {color: #fff; background-color: #00bcd4;}
#section42 {color: #fff; background-color: #009688;}
#section5 {

    color: #fff;
    background-color: cadetblue;

}

#section6 {

    color: #fff;
    background-color: pink;

}

#section7 {

    color: #fff;
    background-color: coral;

}


@media screen and (max-width: 810px) {
  #section1, #section2, #section3, #section41, #section42  {
      margin-left: 150px;
  }
}
</style>


<script type="text/javascript">
// top Hace referencia a la ventana donde está situada el frame donde estamos trabajando. Como la propiedad parent.
// top y left son su distancia al borde superior e izquierdo de la pantalla.

$('.menu-categories ul li').click(function (e) {
var t = $('h4[data-id="' + this.getAttribute('id') + '"]');
if (t.length > 0) {
var n = $('h4[data-id="' + this.getAttribute('id') + '"]').box();
window.scrollBy(0, n.top - 37)  //scroll up
}
});


function() {
  var e = "#sub-" + this.id;
  if ($(this).hasClass("open")) $(this).removeClass("open"), $(e).animate({
    height: 0
  });
  else {
    var e = "#sub-" + this.id,
      t = $(e).children(),
      n = 0;
    $.each(t, function(e, t) {
      var o = $(t).box();
      n += o.height
    }), $(e).animate({
      height: n
    }), $(this).addClass("open")
  }
}


function g() {
  var b;
  try {
    var e = this;
    var g = k(arguments);
    var h = "function" == typeof d ? d(g, e) : d || {}
  } catch (z) {
    r([z, "", [g, e, f], h])
  }
  l(c + "start", [g, e, f], h);
  try {
    return b = a.apply(e, g)
  } catch (z) {
    throw l(c +
      "err", [g, e, z], h), z;
  } finally {
    l(c + "end", [g, e, b], h)
  }
}

// SECCION DEL TITULO


function(e) {
  l = $(this).closest(".categoria-menu-content");
  var t = l.hasClass("active");
  t ? l.removeClass("active") : l.addClass("active")
}

function() {
  if (window.innerWidth > 520) return !1;
  if ($(this).next().hasClass("open")) return void $(this).next().removeClass("open");
  $(this).next().addClass("open");
  var e = $(this),
    t = e.offset().top;
  $("html, body").animate({
    scrollTop: t - 50
  }, 500)
}


function g() {
  var b;
  try {
    var e = this;
    var g = k(arguments);
    var h = "function" == typeof d ? d(g, e) : d || {}
  } catch (z) {
    r([z, "", [g, e, f], h])
  }
  l(c + "start", [g, e, f], h);
  try {
    return b = a.apply(e, g)
  } catch (z) {
    throw l(c +
      "err", [g, e, z], h), z;
  } finally {
    l(c + "end", [g, e, b], h)
  }
}

</script>



  </head>
  <body data-spy="scroll" data-target="#myScrollspy" >

    <div class="container-fluid" style="background-color:#2196F3;color:#fff;height:220px;">
      <h1>Scrollspy & Affix Example</h1>
      <h3>Fixed vertical sidenav on scroll</h3>
      <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
      <p>The left menu sticks the page after you have scrolled a specified amount of pixels, and the links in the menu are automatically updated based on scroll position.</p>
    </div>
    <br>


  <div class="container">
    <div class="row">
      <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="">
          <li><a href="#section1">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
          <li><a href="#section5">Section 5</a></li>
          <li><a href="#section6">Section 6</a></li>
          <li><a href="#section7">Section 7</a></li>
        </ul>
      </nav>
      <div class="col-sm-9">
        <div id="section1">
          <h1>Section 1</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section2">
          <h1>Section 2</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section3">
          <h1>Section 3</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section41">
          <h1>Section 4-1</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section42">
          <h1>Section 4-2</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>

        <div id="section5">
          <h1>Section 5</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section6">
          <h1>Section 6</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
        <div id="section7">
          <h1>Section 7</h1>
          <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>

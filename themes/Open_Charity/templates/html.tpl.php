<!DOCTYPE html>
<head>
<?php print $head; ?>
<script>

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
 document.body.style.backgroundColor = "#1E1E1E";
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.body.style.backgroundColor = "white";
  document.getElementById("loader1").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<div id="loader"><p class="in">in</p> </div>
<div id="loader1">

<p class="p_class">Loading your experience</p>
</div>
<body onload="myFunction()"  class="<?php print $classes; ?>"<?php print $attributes; ?>>

 <div id="myDiv">
 <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  </div>
</body>

</html>
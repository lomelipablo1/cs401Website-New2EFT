<?php
session_start();

$_SESSION['currentPage'] = "maps";

?>

<!doctype html>

<html class="">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="New to EFT? Well you've come to the right website!">

<title>Welcome to NewToEFT.com</title>

<link href="//db.onlinewebfonts.com/c/c05a0e2ed6cec31b7500e45412ecb352?family=NeusaW00-DemiBold" rel="stylesheet" type="text/css"/>

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/styles.css" rel="stylesheet" type="text/css">

<script src="javascript/jquery-3.5.0.js"></script>

<script src="javascript/myJs.js"></script>

<link rel='icon' href='images/favicon.ico' type='image/x-icon'>

</head>

<body>

<!--Container starts here-->

<div class="gridContainer"> 

<!--Top section here-->

<?php
include 'php/header.php';
?>

<!--Top section ends here-->

<!--rimary Container starts here-->

<article class="fluid extraPadding">
<h2 class="fluid showAreaH2 headingStyle">Current Maps:</h2>

<img id="mainImage" src="images/map.jpg" />
<hr>
<div id="divId">
	<img class="jqImgStyle" src="images/factory.jpg" />
	<img class="jqImgStyle" src="images/customs.png" />
	<img class="jqImgStyle" src="images/interchange.jpg" />
	<img class="jqImgStyle" src="images/labs.png" />
	<img class="jqImgStyle" src="images/reserve.png" />
	<img class="jqImgStyle" src="images/shoreline.jpg" />
	<img class="jqImgStyle" src="images/woods.png"  />
</div>


</article>
<!--Primary content area ends here--> 

<!--Footer starts here-->

<footer class="fluid footer">
<section class="fluid secondarySection">
<p class="contentArea">Copyright © 2020 NewToEFT™</p>
</section>
</footer>

<!--Footer ends here--> 

</div>

<!--Container ends here-->

</body>
</html>


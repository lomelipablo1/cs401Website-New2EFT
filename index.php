<?php
session_start();

$_SESSION['currentPage'] = "index";

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

<link rel='icon' href='images/favicon.ico' type='image/x-icon'/ >

</head>

<body>

<!--Container starts here-->

<div class="gridContainer"> 

<!--Top section starts here-->

<?php
include 'php/header.php';
?>

<!--Top section ends here-->

<!--Primary Container starts here-->

<article class="fluid textContainer">
<h1 class="fluid mainHeading headingStyle">NEW TO EFT?</h1>
<h1 class="fluid mainTagline textStyle">Welcome to NewToEFT, where all your noob needs are met!</h1>

<section id="sectionOne" class="fluid ">

<h2 class="">Latest news:</h2>

<p class="paraContent">Check out this <a href="">crazy build</a> if you would like to be unstoppable!</p>

<p class="paraContent">For veterans that need a reminder on newest bullet types check out this <a href="">chart!</a></p>

</section>
</article>

<!--Primary content area ends here--> 

<!--Footer starts here -->

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


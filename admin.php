<?php
session_start();

if(isset($_SESSION['admin']) && $_SESSION['admin'] = 1)
{
	$_SESSION['currentPage'] = "admin";
}
else
{
	header("Location: php/login.php");
}

?>

<!doctype html>

<html class="">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="New to EFT? Well you've come to the right website!">

<title>Welcome to NewToEFT.com</title>

<link href="//db.onlinewebfonts.com/c/c05a0e2ed6cec31b7500e45412ecb352?family=NeusaW00-DemiBold" rel="stylesheet" type="text/css">

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/styles.css" rel="stylesheet" type="text/css">

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

<!--Primary Container starts here-->

<article class="fluid">

<section id="sectionOne" class ="">
<!-- Sign up feature implemented here. -->
<h2>You are in the secret admin page.</h2>
<p>Additional features for admins to come.</p>

</section>

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


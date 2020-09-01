<?php
session_start();

$_SESSION['currentPage'] = "update";

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

<!-- Faq feature implemented here. -->
<article class="fluid textContainer">

<section id="sectionOne" class="fluid ">

<h2 class="fluid showAreaH2 headingStyle sectionText">The latest update releases from BattleState Game Developers!</h2>

<main id="faqs">
<h2 class=""><strong>This will need new content</strong></h2>
<div>
<p>This is an intro to v.123213123 and it has killer new updates.</p>
</div>

<h2 class=""><strong>Previous update that is a bit older</strong></h2>
<div>
<p>v.001243123 has a few bugs but its still fun to play!.</p>
</div>

<h2 class=""><strong>Acient update that came out</strong></h2>
<div>
<p>v.0000000000000000001 its basically unplayable but its kinda cool to see where they're going.</p>
</div>

</main>
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


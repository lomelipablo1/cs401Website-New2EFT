<?php
  session_start();
?>
<!doctype html>

<html class="">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="New to EFT? Well you've come to the right website!">

<title>Welcome to NewToEFT.com</title>

<link href="../css/boilerplate.css" rel="stylesheet" type="text/css">

<link href="../css/responsive.css" rel="stylesheet" type="text/css">

<link href="../css/styles.css" rel="stylesheet" type="text/css">

<link rel='icon' href='../images/favicon.ico' type='image/x-icon'/ >

</head>

<body>

<!--Container starts here-->

<div class="gridContainer"> 

<!--Top section starts here-->
<strong><a href="../index.php" class="linkStyle" title="Nav Link">Return Home</a></strong>
<header class="fluid hero heroHeader"> 

<img id="" src="../images/logo.png" alt=""/>

<h1 class="fluid mainHeading headingStyle">NEW TO EFT?</h1>
<h6 class="fluid mainTagline textStyle">Welcome to NewToEFT, where all your noob needs are met!</h6>
</header> 
<!--Top section ends here-->

<!--Primary Container starts here-->
<article class="fluid textContainer">

<section id="sectionOne" class="fluid ">

		<h1>NewToEFT Login</h1>
		<div class="newFont">
		<?php
			if (isset($_SESSION['message1'])) {
			echo "<div class=\" error \">{$_SESSION['message1']}</div>";
			unset($_SESSION['messsage1']);
			}
		?>
		</div>
		<form class="newFont" action="login_handler.php" method="post">
			<div>
				<label for="username">Email:</label>
				<input type="textbox" name="username" value="<?php if(isset($_SESSION['email1'])) echo $_SESSION['email1']; ?>" />
				<span class="error"><?php if (isset($_SESSION['errorEmail'])) echo $_SESSION['errorEmail']; ?></span>
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" value="<?php if(isset($_SESSION['pass1'])) echo $_SESSION['pass1']; ?>" />
				<span class="error"><?php if (isset($_SESSION['errorLPass'])) echo $_SESSION['errorLPass']; ?></span>
			</div>
			<div>
				<input class="newFont" type="submit" />
			</div>
		</form>
	</section>
</article>

<!--Primary content area ends here--> 

</div>
<!--Container ends here-->

	</body>
</html>
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

		<h1>Want to be part of our updates news letters?
		Sign up below!</h1>
		<div class="newFont">
		<?php
			if (isset($_SESSION['message2'])) {
			echo "<div class=\"error \">{$_SESSION['message2']}</div>";
			unset($_SESSION['messsage2']);
			}
		?>
		</div>
		<form class="newFont" action="register_handler.php" method="post">
			<div>
				<label class="newFont" for="registerName">Name:</label>
				<input type="textbox" name="registerName" value="<?php if(isset($_SESSION['name']))echo $_SESSION['name']; ?>" />
				<span class="error"><?php if (isset($_SESSION['errorName'])) echo $_SESSION['errorName']; ?></span>
			</div>
			<div>
				<label class="newFont" for="registerUsername">Email:</label>
				<input type="textbox" name="registerUsername" value="<?php if(isset($_SESSION['email2']))echo $_SESSION['email2']; ?>" />
				<span class="error"><?php if (isset($_SESSION['errorUser'])) echo $_SESSION['errorUser']; ?></span>
			</div>
			<div>
				<label class="newFont" for="registerPassword">Password:</label>
				<input type="password" name="registerPassword" value="<?php if(isset($_SESSION['pass2']))echo $_SESSION['pass2']; ?>" />
				<span class="error"><?php if (isset($_SESSION['errorPass'])) echo $_SESSION['errorPass']; ?></span>
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
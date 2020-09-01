<?php
session_start();

$_SESSION['currentPage'] = "tips";

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

<!--Top section here-->

<?php
include 'php/header.php';
?>

<!--Top section ends here-->

<!--Primary Container starts here-->

<!-- Emaillist feature implemented here -->
<article class="fluid gallery">

<section id="sectionOne" class="fixForm ">

<h2>Some beginner tips will be listed here like loadouts, questing, control buttons that are not explicitly told to the player.</h2>



</section>

<section id="sectionTwo" class="fixForm ">
 
<h2>Data Tables:</h2>
<form action="php/table_handler.php" method="post">
			<div class="newFont">
				<label class="newFont"  for="statTable">Category:</label>
				<select class="newFont" name="statTable">
					<option  <?php if(isset($_SESSION['currentTable1']))if($_SESSION['currentTable1'] == 1)echo "selected";?> value="1">Bullets</option>
					<option <?php if(isset($_SESSION['currentTable1']))if($_SESSION['currentTable1'] == 2)echo "selected";?> value="2">Armor</option>
					<option <?php if(isset($_SESSION['currentTable1']))if($_SESSION['currentTable1'] == 3)echo "selected";?> value="3">Keys</option>
				</select>
			
				<input class="newFont"  type="submit" />
			</div>
</form>

<?php 
if(isset($_SESSION['status1']))
{
	echo "<p class=\"newFont\" >{$_SESSION['status1']}</p>";
}

if(isset($_SESSION['tableArray'])){
$lines = $_SESSION['tableArray']; 
		echo "<table><thead><tr><th>Ammo Name</th><th>Ammo Type</th><th>Damage Value</th><th>Pen Power</th><th>Armor Damage</th><th>Fragment Chance</th></tr></thead><tbody>";
		foreach ($lines as $line) {
			echo "<tr><td>{$line['ammoName']}</td>";
			echo "<td>{$line['ammoType']}</td>";
			echo "<td>{$line['damageVal']}</td>";
			echo "<td>{$line['penPower']}</td>";
			echo "<td>{$line['armorDamage']}</td>";
			echo "<td>{$line['fragmentChance']}</td></tr>";
		}
		echo "</tbody></table>";
}
?>
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


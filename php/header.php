<?php
	
?>

<?php 
	if (!isset($_SESSION['currentUser'])) {
      echo "<a href=\"php/login.php\" class=\"linkStyle\">Login</a> |";
    }
?>

<?php 
	if (isset($_SESSION['currentUser'])) {
      echo "<a href=\"php/logout.php\" class=\"linkStyle\">Logout</a>";
    }
?>


<?php 
	if (!isset($_SESSION['currentUser'])) {
      echo "<a href=\"php/register.php\" class=\"linkStyle\">Register</a>";
    }
?>

 
<?php
	if (isset($_SESSION['currentUser'])) {
      echo "<span class=\"loginUser textStyle\">Welcome, {$_SESSION['currentUser']}</span>";
    }
	if (isset($_SESSION['justRegistered'])) {
      echo "<span class=\"loginUser textStyle\">Thanks for registering!</span>";
	  unset($_SESSION['justRegistered']);
    }
?>


<header class="fluid hero heroHeader"> 
	
    <!--Add you logo here-->
    <img id="" src="images/logo.png" alt=""/>
	
    <!-- The navigation links-->
    <nav class="fluid topNav">
      <ul class="fluid fluidList topNavUl" name="topNavListBox">
		<!-- home -->
		<?php if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "index")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"index.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Home</a></strong></li>";}
		else
			echo "<li class=\"fluid topNavLI\"><strong><a href=\"index.php\" class=\"linkStyle\" title=\"Nav Link\">Home</a></strong></li>"; ?>
		<!-- update -->
        <?php if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "update")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"update.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Update</a></strong></li>";}
		else
			echo "<li class=\"fluid topNavLI\"><strong><a href=\"update.php\" class=\"linkStyle\" title=\"Nav Link\">Update</a></strong></li>"; ?>
		<!-- maps -->
        <?php if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "maps")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"maps.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Maps</a></strong></li>";}
		else
			echo "<li class=\"fluid topNavLI\"><strong><a href=\"maps.php\" class=\"linkStyle\" title=\"Nav Link\">Maps</a></strong></li>"; ?>
		<!-- tips -->
        <?php if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "tips")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"tips.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Tips</a></strong></li>";}
		else
			echo "<li class=\"fluid topNavLI\"><strong><a href=\"tips.php\" class=\"linkStyle\" title=\"Nav Link\">Tips</a></strong></li>"; ?>
		<!-- builds -->
        <?php if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "builds")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"builds.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Builds</a></strong></li>"; }
		else
			echo "<li class=\"fluid topNavLI\"><strong><a href=\"builds.php\" class=\"linkStyle\" title=\"Nav Link\">Builds</a></strong></li>"; ?>
		<!--admin-->
		<?php
			if (isset($_SESSION['admin'])) {
				if($_SESSION['admin'] == 1)
				{
					if(isset($_SESSION['currentPage']) && !strcmp($_SESSION['currentPage'], "admin")){echo "<li class=\"fluid topNavLI\"><strong><a href=\"admin.php\" class=\"linkStyle currentPage\" title=\"Nav Link\">Admin</a></strong></li>"; }
					else
						echo "<li class=\"fluid topNavLI\"><strong><a href=\"admin.php\" class=\"linkStyle\" title=\"Nav Link\">Admin</a></strong></li>";
					
				}
			  
			}
		?>
		
      </ul>

    </nav>
    
    
	
</header>
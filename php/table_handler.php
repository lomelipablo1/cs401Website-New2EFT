<?php
	session_start();
	
	require_once 'Dao.php';
	$dao = new Dao();
	
	$selectedTable = $_POST['statTable'];
	
	
	if($selectedTable == 2)
	{
		$_SESSION['status1'] = "Armor Currently not supported.";
		$_SESSION['currentTable1'] = 2;
		if(isset($_SESSION['tableArray']))unset($_SESSION['tableArray']);
		header("Location: ../tips.php");
	}
	else if($selectedTable == 3)
	{
		$_SESSION['status1'] = "Keys Currently not supported.";
		$_SESSION['currentTable1'] = 3;
		if(isset($_SESSION['tableArray']))unset($_SESSION['tableArray']);
		header("Location: ../tips.php");
	}
	else if($selectedTable == 1)
	{
		$_SESSION['status1'] = "Bullets Currently supported.";
		$_SESSION['currentTable1'] = 1;
		$queryArray = array();
		foreach($dao->getTable("bullets") as $line)
		{
			array_push($queryArray, array(
			"ammoName" => $line['ammoName'],
			"ammoType" =>$line['ammoType'],
			"damageVal" =>$line['damageVal'],
			"penPower" =>$line['penPower'],
			"armorDamage" =>$line['armorDamage'],
			"fragmentChance" =>$line['fragmentChance']
			)
			);
		}
		$_SESSION['tableArray'] = $queryArray;
		header("Location: ../tips.php");
	}
	
?>
<?php
	session_start();
	
	require_once 'Dao.php';
	$dao = new Dao();
	
	$username = $_POST['registerUsername'];
	$password = $_POST['registerPassword'];
	$name = $_POST['registerName'];
	
	$_SESSION['email2'] = $username;
	$_SESSION['pass2'] = $password;
	$_SESSION['name'] = $name;
	
	
	$email = filter_var($username, FILTER_SANITIZE_EMAIL);
	
	$validuser = 1;
	$validpass = 1;
	$validname = 1;
	if(empty($username) || empty($password) || empty($name))
	{
		$validuser = 0;
		$validpass = 0;
		$validname = 0;
		$_SESSION['message2'] = "Register Unsuccessful.";
		$_SESSION['errorName'] = "Please Enter A Name.";
		$_SESSION['errorUser'] = "Please Enter A Email.";
		$_SESSION['errorPass'] = "Password must be minimum of 6 characters.";
		header("Location: ../php/register.php");
	}
	if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/i", $name)  || strlen($name) > 100) {
		$_SESSION['errorName'] = "Please Enter Valid Name.";
		$validname = 0;
	}
	else
	{
		$_SESSION['errorName'] = "";
		$validname = 1;
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)  || strlen($email) > 100) {
		$_SESSION['errorUser'] = "Please Enter Valid Email.";
		$validuser = 0;
	}
	else
	{
		$_SESSION['errorUser'] = "";
		$validuser = 1;
	}
	if(strlen($password) < 6 || strlen($password) > 64) {
		$_SESSION['errorPass'] = "Password must be minimum of 6 characters.";
		$validpass = 0;
	}
	else
	{
		$_SESSION['errorPass'] = "";
		$validpass = 1;
	}
	if($validuser == 1 && $validpass == 1 && $validname == 1)
	{
		$salt = "eftisfun";

		$epassword = hash('sha256', $password . $salt);
		$register = $dao->registerUser($email, $epassword, $name);
	
		if($register == 1) {
			$_SESSION['message2'] = "";
			$_SESSION['justRegistered'] = 1;
			unset($_SESSION['email2']);
			unset($_SESSION['pass2']);
			unset($_SESSION['name']);
			unset($_SESSION['errorUser']);
			unset($_SESSION['errorPass']);
			unset($_SESSION['errorName']);
			header("Location: ../index.php");
			
		} 
		else {
			$_SESSION['auth'] = false;
			$_SESSION['message2'] = "Email already exists.";
			header("Location: ../php/register.php");
		}
	}
	else {
			$_SESSION['auth'] = false;
			$_SESSION['message2'] = "Register Unsuccessful.";
			header("Location: ../php/register.php");
	}
?>
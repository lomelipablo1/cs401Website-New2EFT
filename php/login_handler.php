<?php
	session_start();

	require_once 'Dao.php';
	$dao = new Dao();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$email = filter_var($username, FILTER_SANITIZE_EMAIL);
	
	$_SESSION['email1'] = $username;
	$_SESSION['pass1'] = $password;
	
	if(empty($email) || empty($password))
	{
		$_SESSION['message1'] = "Missing form fields.";
		$_SESSION['errorEmail'] = "Please Enter An Email";
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errorEmail'] = "Enter a valid Email.";
		}
		else
		{
			$_SESSION['errorEmail'] = "";
		}
		$_SESSION['errorLPass'] = "Please Enter A Password";
		header("Location: ../php/login.php");
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password))
	{
		$_SESSION['errorEmail'] = "Enter a valid Email.";
		$_SESSION['errorLPass'] = "";
		header("Location: ../php/login.php");
	}
	else
	{
		$salt = "eftisfun";
		$epassword = hash('sha256', $password . $salt);
		$loginInfo = $dao->checkLogin($email, $epassword);
	
		if ($loginInfo == 1) {
			$_SESSION['message1'] = "";
			$_SESSION['errorLPass'] = "";
			$_SESSION['errorEmail'] = "";
			$_SESSION['currentUser'] = $email;
			$_SESSION['admin'] = $dao->checkAdmin($email);
			header("Location: ../index.php");
		} 
		else {
			$_SESSION['message1'] = "Login Unsuccessful, email or password incorrect.";
			$_SESSION['errorLPass'] = "";
			$_SESSION['errorEmail'] = "";
			header("Location: ../php/login.php");
		}
	}
?>
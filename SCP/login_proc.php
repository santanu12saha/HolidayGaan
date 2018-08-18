<?php
//Created by: ManyaSK---Date: 01-September-2015
error_reporting(0);
session_start();
if($_SESSION['bpid']=="")
{
	include "../db/db_connection.php";
	if($_SERVER["REQUEST_METHOD"]==="POST")
	{
		if(isset($_GET["ULogin"]))
		{
			//AJAX form submission
			$user = json_decode($_GET["ULogin"]);
			$result = array("receivedusername" => $user->username,"receivedpassword" => $user->password);
			
			$username = $result['receivedusername'];
			$password = $result['receivedpassword'];
			
			$sql = $dbConnection->prepare("SELECT * FROM superadmin_log WHERE username=?");
			$sql->execute(array($username));
			$row = $sql->fetch();
				  
			$uid = $row['superadmin_id'];
			$user_name = $row['username']; 
			$name = $row['username']; 
			$pass = $row['string_pwd'];	
			$salt = $row['string_salt']; 

			$hash = hash('sha256', $password);
			$salted_hash = hash('sha256', $salt . $hash);
			
			if($user_name==$username)
			{
				if($pass == $salted_hash)
				{
					$_SESSION['bpid'] = $uid;
					$_SESSION['user_name'] = $user_name;
					$_SESSION['name'] = $name;
					$result= json_encode(array("Success"));
					echo $result;
					header('Location: add_duration.php');
				}
				else
				{
					$result = "Invalid Password.";
					echo $result;
				}
			}
			else
			{
				$result = "Invalid Username.";
				echo $result;
			}
		}
		else
		{
			$result = "Invalid Request Data.";
			echo $result;
		}
	}
	else
	{
		$result= "Method is not Post.";
		echo $result;
	}
}
else
{
	echo "<script language=\"javascript\">window.location=\"index?status=2\";</script>";
}
?>

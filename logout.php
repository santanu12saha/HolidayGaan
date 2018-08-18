<?php
error_reporting(0);
session_start();
require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\vkationdemo\fb-login\fbConfig.php');

unset($_SESSION['facebook_access_token']);

	
	function time_elapsed_B($secs)
	{
		$bit = array
		(
			//' year'        => $secs / 31556926 % 12,
			//' week'        => $secs / 604800 % 52,
			//' day'        => $secs / 86400 % 7,
			//' hour'        => $secs / 3600 % 24,
			'' => $secs / 60 % 60
			//' second'    => $secs % 60
        );
        
		foreach($bit as $k => $v)
		{
			if($v > 1)$ret[] = $v . $k ;
			if($v == 1)$ret[] = $v . $k;
        }
		array_splice($ret, count($ret)-1, 0);
		$ret[] = '';
    
		return join(' ', $ret);
    }
    
	$nowtime = time();
	$oldtime = $_SESSION['oldtime'];

	
	//echo "Time spent: ".time_elapsed_B($nowtime-$oldtime)."\n";
    
	$dbServer = 'localhost'; //Define database server host
	$dbUsername = 'root'; //Define database username
	$dbPassword = ''; //Define database password
	$dbName = 'vkation'; //Define database name
	
	//connect databse
	$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
	if(mysqli_connect_errno())
	{
		die("Failed to connect with MySQL: ".mysqli_connect_error());
	}
	$userid = $_SESSION['useridFB'];
	
	$prev_query = mysqli_query($con,"SELECT timespent,vpage FROM tbl_registration WHERE oauth_uid='$userid'") or die(mysqli_error($con));
	$tt=mysqli_fetch_assoc($prev_query);
	$vpages=$tt['vpage']+$_GET['vpage'];
	$timsp=$tt['timespent']+time_elapsed_B($nowtime-$oldtime);
	
	$update = mysqli_query($con,"UPDATE tbl_registration SET timespent='$timsp',vpage='$vpages' WHERE  oauth_uid='$userid'");
		
	//echo $_SERVER['PHP_SELF'];
	//echo "IP address : ".$_SERVER['REMOTE_ADDR'];
	$ipadr=get_client_ip();
	//echo $ipadr;
	function get_client_ip() 
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	
	
	//$_GET['vpage'];
	//echo $_SERVER['SERVER_ADMIN'];
	//echo $_SERVER['HTTPS'];
	
	
	session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);
	echo "<script language=\"javascript\">window.location=\"http://localhost/vKationdemo\";</script>";
?>
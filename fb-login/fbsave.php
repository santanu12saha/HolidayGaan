<?php
	error_reporting(E_ALL);
	require_once 'fbConfig.php';


	$dbServer = 'localhost'; //Define database server host
	$dbUsername = 'root'; //Define database username
	$dbPassword = ''; //Define database password
	$dbName = 'vkation'; //Define database name
	
	$fbUserProfile = "";
	
	//connect databse
	$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
	if(mysqli_connect_errno())
	{
		die("Failed to connect with MySQL: ".mysqli_connect_error());
	}
	
	if(isset($accessToken))
	{
		if(isset($_SESSION['facebook_access_token']))
		{
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
		}
		else
		{
			// Put short-lived access token in session
			$_SESSION['facebook_access_token'] = (string) $accessToken;
		
			// OAuth 2.0 client handler helps to manage access tokens
			$oAuth2Client = $fb->getOAuth2Client();
		
			// Exchanges a short-lived access token for a long-lived one
			$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
			$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
			// Set default access token to be used in script
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
		}
	
		try 
		{
			$profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,age_range,link,gender,locale,picture');
			$fbUserProfile = $profileRequest->getGraphNode()->asArray();
		} 
		catch(FacebookResponseException $e) 
		{
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} 
		catch(FacebookSDKException $e) 
		{
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}
	
	}
	
	$cts = date("Y-m-d");		
	$oauth_uid = $fbUserProfile['id'];
	$fname = $fbUserProfile['first_name'];			
	$lname = $fbUserProfile['last_name'];
	$email = $fbUserProfile['email'];
	$age_range = $fbUserProfile['age_range']['min'];
	$age = $age_range;
	$_SESSION['oldtime']=time();
	
	$gender = $fbUserProfile['gender'];
	if($gender=="male")
	{
		$gen='1';
	}
	else
	{
		$gen='0';
	}
	if($gender == "female" && $age_range <= 23)
	{
		$relationship_status = "UnMarried";
		$mstatus="0";
	}
	else if($gender == "male" && $age_range <= 25)
	{
		$relationship_status = "UnMarried";
		$mstatus="0";
	}
	else
	{
		$relationship_status = "Married";
		$mstatus="1";
	}
	
	$user_image = "https://graph.facebook.com/".$oauth_uid."/picture?type=large";
	
	$prev_query = mysqli_query($con,"SELECT * FROM tbl_registration WHERE oauth_uid = '".$oauth_uid."'") or die(mysql_error($con));
	
	if(mysqli_num_rows($prev_query)>0)
	{
		/*Assign value to session start here*/
		$_SESSION['usernameFB'] = $fname." ".$lname;
		$_SESSION['picFB'] = $user_image;
		$_SESSION['useridFB'] = $oauth_uid;
		/*Assign value to session end here*/
		
		/*Probability calculation part start here*/
		$result_data = mysqli_fetch_array($prev_query);	
		$vpage=$result_data['vpage'];
		$timespent=$result_data['timespent'];
		
		$y1=((-0.120 * $age) + (0.259 * $mstatus) + (0 * 1) + (-0.182 * $timespent) + (-0.091 * $vpage ) + (0.00 * $gen ) + (4.961*1));
		$p1=exp($y1)/(exp($y1)+1);
		//echo "Sum Y1 - ".$y1."</br>";
		//echo "Prob P1 - ".$p1."</br>";
		
		
		$y2=((-0.073 * $age) + (0.0 * $mstatus) + (0.251 * 1) + (0.0 * $timespent) + (-0.047 * $vpage ) + (0.00 * $gen ) + (2.913*1));
		$p2=exp($y2)/(exp($y2)+1);
		//echo "Sum Y2 - ".$y2."</br>";
		//echo "Prob P2 - ".$p2."</br>";
		
		$y3=((0.068 * $age) + (-1.333 * $mstatus) + (0.210 * 1) + (0.143 * $timespent) + (0.050 * $vpage ) + (0.00 * $gen ) + (-2.667*1));
		$p3=exp($y3)/(exp($y3)+1);
		//echo "Sum Y3 - ".$y3."</br>";
		//echo "Prob P3 - ".$p3."</br>";
		
		$y4=((0.038 * $age) + (3.457 * $mstatus) + (0 * 1) + (0.313 * $timespent) + (0.096 * $vpage ) + (0.00 * $gen ) + (-6.015*1));
		$p4=exp($y4)/(exp($y4)+1);
		//echo "Sum Y4 - ".$y4."</br>";
		//echo "Prob P4 - ".$p4."</br>";
		
		$y5=((0.055 * $age) + (3.776 * $mstatus) + (0 * 1) + (0.238 * $timespent) + (0.097 * $vpage ) + (0.00 * $gen ) + (-7.042*1));
		$p5=exp($y5)/(exp($y5)+1);
		//echo "Sum Y5 - ".$y5."</br>";
		//echo "Prob P5 - ".$p5."</br>";
		
		$y6=((-0.004 * $age) + (0.189 * $mstatus) + (0 * 1) + (0.131 * $timespent) + (0.043 * $vpage ) + (0.00 * $gen ) + (-0.503*1));
		$p6=exp($y6)/(exp($y6)+1);
		//echo "Sum Y6 - ".$y6."</br>";
		//echo "Prob P6 - ".$p6."</br>";
		/*Probability calculation part end here*/
		
		$update = mysqli_query($con,"UPDATE tbl_registration SET oauth_uid = '".$oauth_uid."', first_name = '".$fname."', last_name = '".$lname."', email_id = '".$email."',age= '".$age."',gender='".$gen."',mstatus='".$mstatus."',Adventure_and_Exploration='".$p1."',Romantic_Holidays='".$p2."',Wellness_and_Care='".$p3."',Heritage_and_Spirituality='".$p4."',Family_and_Kids='".$p5."',Ecotourism='".$p6."' WHERE oauth_uid = '".$oauth_uid."'");
	}
	else
	{
		/*Assign value to session start here*/
		$_SESSION['usernameFB'] = $fname." ".$lname;
		$_SESSION['useridFB'] = $oauth_uid;
		$_SESSION['picFB'] = $user_image;
		/*Assign value to session end here*/
		
		/*Probability calculation part start here*/
		$result_data = mysqli_fetch_array($prev_query);	
		$vpage=$result_data['vpage'];
		$timespent=$result_data['timespent'];
		
		$y1=((-0.120 * $age) + (0.259 * $mstatus) + (0 * 1) + (0.00 * $gen ) + (4.961*1));
		$p1=exp($y1)/(exp($y1)+1);
		
		
		$y2=((-0.073 * $age) + (0.0 * $mstatus) + (0.251 * 1) + (0.00 * $gen ) + (2.913*1));
		$p2=exp($y2)/(exp($y2)+1);
		
		
		$y3=((0.068 * $age) + (-1.333 * $mstatus) + (0.210 * 1) + (0.00 * $gen ) + (-2.667*1));
		$p3=exp($y3)/(exp($y3)+1);
		
		
		$y4=((0.038 * $age) + (3.457 * $mstatus) + (0 * 1) + (0.00 * $gen ) + (-6.015*1));
		$p4=exp($y4)/(exp($y4)+1);
		
		
		$y5=((0.055 * $age) + (3.776 * $mstatus) + (0 * 1) + (0.00 * $gen ) + (-7.042*1));
		$p5=exp($y5)/(exp($y5)+1);
		
		
		$y6=((-0.004 * $age) + (0.189 * $mstatus) + (0 * 1) + (0.00 * $gen ) + (-0.503*1));
		$p6=exp($y6)/(exp($y6)+1);
		
		/*Probability calculation part end here*/
		
		$insert = mysqli_query($con,"INSERT INTO tbl_registration SET oauth_uid = '".$oauth_uid."', first_name = '".$fname."', last_name = '".$lname."', email_id = '".$email."',age='".$age."',gender='".$gen."',mstatus='".$mstatus."',Adventure_and_Exploration='".$p1."',Romantic_Holidays='".$p2."',Wellness_and_Care='".$p3."',Heritage_and_Spirituality='".$p4."',Family_and_Kids='".$p5."',Ecotourism='".$p6."',cts='".$cts."'");
	}
	
	$query = mysqli_query($con,"SELECT * FROM tbl_registration WHERE oauth_uid = '".$oauth_uid."'");
	$result = mysqli_fetch_array($query);
	$Ecotourism=$result['Ecotourism'];
	$Family_and_Kids=$result['Family_and_Kids'];
	$Heritage_and_Spirituality=$result['Heritage_and_Spirituality'];
	$Wellness_and_Care=$result['Wellness_and_Care'];
	$Romantic_Holidays=$result['Romantic_Holidays'];
	$Adventure_and_Exploration=$result['Adventure_and_Exploration'];
	//echo "hoghest value</br>";
	$max=max($Ecotourism,$Family_and_Kids,$Heritage_and_Spirituality,$Wellness_and_Care,$Romantic_Holidays,$Adventure_and_Exploration);
	//echo "</br>";
	if($max>0.67)
	{
		$queryTotal = mysqli_query($con,"SELECT * FROM tbl_registration");
		$totalrecord=mysqli_num_rows($queryTotal);
		//echo mysqli_num_rows($queryTotal) . "</br>";
		$query = mysqli_query($con,"SELECT * FROM tbl_registration WHERE age= '".$age."' AND gender= '".$gen."' AND mstatus= '".$mstatus."'");
		$matchrecord=mysqli_num_rows($query);
		//echo mysqli_num_rows($query). "</br>";
		
		
		echo $looklies=($matchrecord/$totalrecord)*100;
		if($looklies>=20)
		{
			
			if($Ecotourism==$max)
			{
				//echo "echo";
				$_SESSION['yEcotourism']=1;
			}
			elseif($Family_and_Kids==$max)
			{
				//echo "family";
				$_SESSION['yFamily_and_Kids']=1;
			}
			elseif($Heritage_and_Spirituality==$max)
			{
				//echo "heri";
				$_SESSION['yHeritage_and_Spirituality']=1;
			}
			elseif($Wellness_and_Care==$max)
			{
				//echo "well";
				$_SESSION['yWellness_and_Care']=1;
			}
			elseif($Romantic_Holidays==$max)
			{
				//echo "rom";
				$_SESSION['yRomantic_Holidays']=1;
			}
			elseif($Adventure_and_Exploration==$max)
			{
				//echo "ad";
				echo $_SESSION['yAdventure_and_Exploration']=1;
			}
				
		}	
			
	}
	else
	{
		
	}	
	echo "<script language=\"javascript\">window.location=\"http://localhost/vKationdemo/eorr.php\";</script>";
?>
<?php
error_reporting(0);
session_start();
	include "db/db_connection.php";
	$data0 = json_decode(file_get_contents("php://input"));
		
	/**...FB Probability Recomandation start here...**/
		$fbds="";
		if($_SESSION['yEcotourism']==1 )
		{
			$fbds=$fbds." AND ecotourism=1 ";
		}	
	
		if($_SESSION['yWellness_and_Care']==1)
		{
			$fbds=$fbds." AND wellness_n_care=1 ";
		}	
		
		if($_SESSION['yHeritage_and_Spirituality']==1)
		{
			$fbds=$fbds." AND heritage_n_spirituality=1 ";
		}		
	
		if($_SESSION['yFamily_and_Kids']==1)
		{
			$fbds=$fbds." AND family_n_kids=1 ";
		}
	
		if($_SESSION['yAdventure_and_Exploration']==1)
		{
			$fbds=$fbds." AND adventure_n_explore=1 ";
		}
		
		if($_SESSION['yRomantic_Holidays']==1)
		{
			$fbds=$fbds." AND romantic_holiday=1 ";
		}	
	/**...FB Probability Recomandation start here...**/
	
	
	//Ecotourism check box...
		$fecotourism = $data0->fecotourism;
		$flds="";
		if($fecotourism=="1")
		{
			$flds=$flds." AND ecotourism=1 ";
		}	
	
	//wellness n care check box...
		$fwellness = $data0->fwellness;
		if($fwellness=="1")
		{
			$flds=$flds." AND wellness_n_care=1 ";
		}	
		
	//heritage_n_spirituality check box.....
		$fheritage = $data0->fheritage;
		if($fheritage=="1")
		{
			$flds=$flds." AND heritage_n_spirituality=1 ";
		}		
	
	//family_n_kids check box....
		$ffamily = $data0->ffamily;
		if($ffamily=="1")
		{
			$flds=$flds." AND family_n_kids=1 ";
		}
	
	//adventure_n_explore check box....
		$fadventure = $data0->fadventure;
		if($fadventure=="1")
		{
			$flds=$flds." AND adventure_n_explore=1 ";
		}
		
	//romantic_holiday check box....
		$fromantic = $data0->fromantic;
		if($fromantic=="1")
		{
			$flds=$flds." AND romantic_holiday=1 ";
		}	
	//swimmingpool check box....
		$fswimming = $data0->fswimming;
		if($fswimming=="1")
		{
			$flds=$flds." AND swimmingpool=1 ";
		}
		
	//fspa check box....
		$fspa = $data0->fspa;
		if($fspa=="1")
		{
			$flds=$flds." AND spa=1 ";
		}	
	
	//fjakuzzi check box....
		$fjakuzzi = $data0->fjakuzzi;
		if($fjakuzzi=="1")
		{
			$flds=$flds." AND jacuzzi=1 ";
		}	
		
	//fcafe check box....
		$fcafe = $data0->fcafe;
		if($fcafe=="1")
		{
			$flds=$flds." AND caffe=1 ";
		}
	
	$delflag = "1";
	$page = "1";
	$page -= 1;
	$per_page = 40;
	$start = $page * $per_page;
	$place = $_SESSION['place'];
	$budget = $_SESSION['budget'];
	$star = $_SESSION['star'];	
	$placeimg = $_SESSION['placeimg'];	
	
	if($budget == "10000")
	{
		$budgetmin=0;
		$budgetmax=10000;
	}	
	elseif($budget == "20000")
	{
		$budgetmin=10000;
		$budgetmax=20000;
	}
	elseif($budget == "30000")
	{
		$budgetmin=20000;
		$budgetmax=30000;
	}
	elseif($budget == "40000")
	{
		$budgetmin=30000;
		$budgetmax=40000;
	}
	elseif($budget == "50000")
	{
		$budgetmin=40000;
		$budgetmax=50000;
	}
	elseif($budget == "60000")
	{
		$budgetmin=50000;
		$budgetmax=60000;
	}
	elseif($budget == "70000")
	{
		$budgetmin=60000;
		$budgetmax=70000;
	}
	elseif($budget == "80000")
	{
		$budgetmin=70000;
		$budgetmax=80000;
	}
	elseif($budget == "90000")
	{
		$budgetmin=80000;
		$budgetmax=90000;
	}
	elseif($budget == "100000")
	{
		$budgetmin=90000;
		$budgetmax=100000;
	}
	elseif($budget == "100000")
	{
		$budgetmin=100000;
		$budgetmax=10000000;
	}
	
	
	/*changes start here*/
	$fromd = $_SESSION['fromd'];
	$date = date_create($fromd);
	$fromdnew=date_format($date, 'Y-m-d');
	
	$tod = $_SESSION['tod'];
	$date1 = date_create($tod);
	$todnew=date_format($date1, 'Y-m-d');
		
	$guests=$_SESSION['guests'];
	$guestsn=intval($guests);
		
	if($placeimg=="")
	{	
		if($star!="")
		{			
			if($fbds!="")
			{	
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) AND property_type=? " . $flds . " UNION SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) AND property_type=? " . $fbds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$place,$budgetmin,$budgetmax,$star,$delflag,$place,$budgetmin,$budgetmax,$star));
			}
			else
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) AND property_type=? " . $flds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$place,$budgetmin,$budgetmax,$star));
			}
		}
		else
		{			
			if($fbds!="")
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " UNION SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $fbds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$place,$budgetmin,$budgetmax,$delflag,$place,$budgetmin,$budgetmax));	
			}
			else	
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$place,$budgetmin,$budgetmax));	
			}
		}
	}
	else
	{
		if($budget!="")
		{			
			if($fbds!="")
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " UNION SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $fbds . "  ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$placeimg,$budgetmin,$budgetmax,$delflag,$placeimg,$budgetmin,$budgetmax));	
			}
			else
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND extra_person>=? AND extra_person<=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$placeimg,$budgetmin,$budgetmax));	
			}
		}
		elseif($budget=="")
		{			
			if($fbds!="")
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " UNION SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $fbds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$placeimg,$delflag,$placeimg));
			}
			else	
			{
				$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? AND property_id IN (SELECT property_id FROM tble_prop_availability WHERE available_date BETWEEN '$fromdnew' AND '$todnew' AND guest>=$guestsn GROUP BY(property_id)) " . $flds . " ORDER BY extra_person ASC LIMIT $start, $per_page");
				$query->execute(array($delflag,$placeimg));
			}
		}
	}
	/*changes end here*/	
	$num = $query->rowCount();
	while ($info = $query->fetch())
	{
		if (strlen($info['property_name'])>27)
		{
			$rest = substr($info['property_name'], 0, 27);
			$dots = "..."; 
			$ftitle = $rest."".$dots;
		}
		else
		{
			$ftitle = $info['property_name'];
		}
		$fprice = $info['extra_person'];
		$ftripadvisorrating = $info['tripadvisorrating'];
		$frating = $info['rating'];
		$fpic = $info['property_picture'];
		$ecotourism = $info['ecotourism'];
		$fpid = $info['property_id'];
		$instantbooking = $info['instantbooking'];
	
		/*Review Count of Each Property Starts Here*/	
			$query1 = $dbConnection->prepare("SELECT * FROM tble_property_review WHERE property_id=? AND delflag=?");
			$query1->execute(array($fpid,$delflag));	
			$num1 = $query1->rowCount();	
		/*Review Count of Each Property Ends Here*/		
		
		$data[] = array("id"=>$fpid,"ftitle" =>$ftitle,"fpic" =>$fpic,"fprice"=>$fprice,"ftripadvisorrating"=>$ftripadvisorrating,"frating"=>$frating,"ecotourism"=>$ecotourism,"reviewcount"=>$num1,"instantbooking"=>$instantbooking,"fbid"=>$_SESSION['useridFB']);		
	}
	echo (json_encode($data));
?>
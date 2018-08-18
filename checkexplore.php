<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$post_data = file_get_contents("php://input");
$post = json_decode($post_data);

$pid = $post->pid;
$delflag = "1";

$sessiondata = array();
$propertydata = array();
$activitydata = array();
$reviewdata = array();
$similardata = array(); 

/*Home-page Session Values & Array Starts Here*/
$place = $_SESSION['place'];
$fromd = $_SESSION['fromd'];
$tod = $_SESSION['tod'];
$guests = $_SESSION['guests'];
$placeimg = $_SESSION['placeimg'];
if(isset($_SESSION['budget']))
{
	$budget= $_SESSION['budget'];
}
else
{
	$budget=0;
}
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
$sessiondata[] = array("place" => "$place","fromd" => "$fromd","tod" => "$tod","guests" => "$guests","budget" => "$budget");
/*Home-page Session Values & Array Ends Here*/

/*Property Loop & Array Starts Here*/
$query = $dbConnection->prepare("SELECT * FROM tble_property WHERE property_id=? AND delflag=? ");
$query->execute(array($pid,$delflag));	
$num = $query->rowCount();
$count = 0;
$info = $query->fetch();
$ppid = $info['property_id'];
$ptitle = $info['property_name'];
$ppdesc = $info['property_description'];	
$plocation = $info['property_location'];
$ppic = $info['property_picture'];
$pprice = number_format($info['extra_person']);
$ptripadvisorrating = $info['tripadvisorrating'];
$prating = $info['rating'];
$platitude = $info['latitude'];
$plongitude = $info['longitude'];
$pswimmingpool = $info['swimmingpool'];
$pspa = $info['spa'];
$pjacuzzi = $info['jacuzzi'];
$pfinedinig = $info['finedinig'];
$pcaffe = $info['caffe'];
$ptax = $info['tax'];

$pimgheader = $info['imgheader'];
$pimg1 = $info['img1'];
$pimg2 = $info['img2'];
$pimg3 = $info['img3'];
$pimg4 = $info['img4'];

$propertydata[] = array("ppid" => "$ppid","ptitle" => "$ptitle","ppdesc" => "$ppdesc","plocation" => "$plocation","ppic" => "$ppic","pprice" => "$pprice","ptripadvisorrating" => "$ptripadvisorrating","prating" => "$prating","platitude" => "$platitude","plongitude" => "$plongitude","pswimmingpool" => "$pswimmingpool","pspa" => "$pspa","pjacuzzi" => "$pjacuzzi","pfinedinig" => "$pfinedinig","pcaffe" => "$pcaffe","ptax" => "$ptax","pimgheader" => "$pimgheader","pimg1" => "$pimg1","pimg2" => "$pimg2","pimg3" => "$pimg3","pimg4" => "$pimg4");




/*Property Loop & Array Ends Here*/	


/*Activity Loop & Array Starts Here*/	
$query1 = $dbConnection->prepare("SELECT * FROM tble_activities WHERE location=? AND delflg=? ");
$query1->execute(array($plocation,$delflag));	
$num1 = $query1->rowCount();
$count1 = 0;
while ($info1 = $query1->fetch())
{
	$apid = $info1['activities_id'];
	$alatitude = $info1['latitude'];
	$alongitude = $info1['longitude'];
	$atitle = $info1['activity_name'];
	$aprice = $info1['price'];
	$apic = $info1['activity_img'];
	//$apic = "<img style='width:100%;height:auto;padding-right:0px;' src='Activities/$info1[activity_img]'/>";
	$alocation = $info1['location'];
	$ahighlight = $info1['highlight_about'];	
	$activity_type = $info1['activity_type'];
	
	$activitydata[] = array("activitytype"=>"$activity_type","apid" => "$apid","atitle" => "$atitle","apic" => "$apic","alat" => "$alatitude","along" => "$alongitude","aprice" => "$aprice","alocation" => "$alocation","ahighlight" => "$ahighlight");
	$count1++;
}
/*Activity Loop & Array Ends Here*/


/*Review Loop & Array Starts Here*/	
$query2 = $dbConnection->prepare("SELECT * FROM tble_property_review WHERE property_id=? AND delflag=?");
$query2->execute(array($ppid,$delflag));	
$num2 = $query2->rowCount();
$count2 = 0;
while ($info2 = $query2->fetch())
{
	$rid = $info2['property_review_id'];
	$rcomment = $info2['review'];	
	
	$reviewdata[] = array("rid" => "$rid","rcomment" => "$rcomment");
	$count2++;
}
/*Review Loop & Array Ends Here*/


/*Similar Listings Loop & Array Starts Here*/	
if($placeimg =="")
{
	
	$query3 = $dbConnection->prepare("SELECT * FROM tble_property WHERE extra_person>=? AND extra_person<=? AND delflag=? AND property_location=? ORDER BY extra_person ASC");
	$query3->execute(array($budgetmin,$budgetmax,$delflag,$place));
}
else
{
	if($budget!="")
	{	
		$query3 = $dbConnection->prepare("SELECT * FROM tble_property WHERE extra_person>=? AND extra_person<=? AND delflag=? AND property_location=? ORDER BY extra_person ASC");
		$query3->execute(array($budgetmin,$budgetmax,$delflag,$placeimg));
	}
	else
	{
		$query3 = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=? AND property_location=? ORDER BY extra_person ASC");
		$query3->execute(array($delflag,$placeimg));
	}
}	
$num3 = $query3->rowCount();
$count3 = 0;
while($info3 = $query3->fetch())
{
	$sppid = $info3['property_id'];
	if(strlen($info3['property_name'])>27)
	{
		$sprest3 = substr($info3['property_name'], 0, 27);
		$spdots3 = "..."; 
		$sptitle3 = $sprest3."".$spdots3;
	}
	else
	{
		$sptitle3 = $info3['property_name'];
	}
	$spprice3 = number_format($info3['extra_person']);
	$sptripadvisorrating3 = $info3['tripadvisorrating'];
	$sprating3 = $info3['rating'];
	$sppic = $info3['property_picture'];
		
	/*Review Count of Each Property Starts Here*/	
		$query4 = $dbConnection->prepare("SELECT * FROM tble_property_review WHERE property_id=? AND delflag=?");
		$query4->execute(array($sppid,$delflag));	
		$num4 = $query4->rowCount();	
	/*Review Count of Each Property Ends Here*/	
	
	
	$similardata[] = array("sppid" => "$sppid","sptitle3" => "$sptitle3","spprice3" => "$spprice3","sptripadvisorrating3" => "$sptripadvisorrating3","sprating3" => "$sprating3","sppic" => "$sppic","reviewcount" => "$num4");	
	$count3++;// We increment the iterator
}
/*Similar Listings Loop & Array Ends Here*/

$finaldata = array("sessiondata" => $sessiondata,"propertydata" => $propertydata,"activitydata" => $activitydata,"reviewdata" => $reviewdata,"reviewcount" => $num2,"similardata" => $similardata);
echo json_encode($finaldata);
?>
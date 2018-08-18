<?php
error_reporting(E_ALL);
session_start();
include_once ("db/db_connection.php");

	$post_data = file_get_contents("php://input");
	$data = json_decode($post_data);
		
	$propid = $data->propid;
	$proptitle = $data->proptitle;
	$propprice = $data->propprice;
	$proplatitude = $data->proplatitude;
	$proplongitude = $data->proplongitude;
	
	$propactivities[] = array($data->propactivities);
	$propactivitieslatlon[] = array($data->propactivitieslatlon);
	$propactivitiesid[] = array($data->propactivitiesid);	
	$propactivitydetails[] = array($data->propactivitydetails);	
	$propactivityfulldetails[] = array($data->propactivityfulldetails);	
	$propactivitytitle[] = array($data->propactivitytitle);	
	$propactivitydates[] = array($data->propactivitydates);	



	$propnodates[] = array($data->propnodates);
	
	
	$proptransport[] = array($data->proptransport);
	$propactivitiestransports[] = array($data->propactivitiestransports);	
	
	$_SESSION['propid'] = $propid;
	$_SESSION['proptitle'] = $proptitle;
	$_SESSION['propprice'] = $propprice;
	$_SESSION['proplatitude'] = $proplatitude;
	$_SESSION['proplongitude'] = $proplongitude;
	
	$_SESSION['propactivities'] = $propactivities;
	$_SESSION['propactivitieslatlon'] = $propactivitieslatlon;
	$_SESSION['propactivitiesid'] = $propactivitiesid;
	$_SESSION['propactivitydetails'] = $propactivitydetails;
	$_SESSION['propactivityfulldetails'] = $propactivityfulldetails;
	$_SESSION['propactivitytitle'] = $propactivitytitle;
	$_SESSION['propactivitydates'] = $propactivitydates;
	
	$_SESSION['propnodates'] = $propnodates;
	
	$_SESSION['proptransport'] = $proptransport;
	$_SESSION['propactivitiestransports'] = $propactivitiestransports;
		
	
	$fpropactivities = $_SESSION['propactivities'];
	$fpropactivitieslatlon = $_SESSION['propactivitieslatlon'];
	$fpropactivitiesid = $_SESSION['propactivitiesid'];
	$fpropactivitydetails = $_SESSION['propactivitydetails'];
	$fpropactivityfulldetails = $_SESSION['propactivityfulldetails'];
	$fpropactivitytitle = $_SESSION['propactivitytitle'];
	$fpropactivitydates = $_SESSION['propactivitydates'];
	
	
	$fpropnodates = $_SESSION['propnodates'];
	
	$fproptransport = $_SESSION['proptransport'];
	$fpropactivitiestransports = $_SESSION['propactivitiestransports'];
	
	$fpropid = $_SESSION['propid'];
	$fproptitle = $_SESSION['proptitle'];
 	$fpropprice = $_SESSION['propprice'];
	$fproplatitude = $_SESSION['proplatitude'];
	$fproplongitude = $_SESSION['proplongitude'];
	
	$properties[] = array("propid" => "$fpropid","proptitle" => "$fproptitle","propprice" => "$fpropprice","proplatitude" => "$fproplatitude","proplongitude" => "$fproplongitude");
	
	$arr = array("properties" => $properties,"fpropactivities" => $fpropactivities,"fpropactivitieslatlon" => $fpropactivitieslatlon,"fpropactivitiesid" => $fpropactivitiesid,"fpropactivitydetails" => $fpropactivitydetails,"fpropactivityfulldetails" => $fpropactivityfulldetails,"fproptransport" => $fproptransport,"fpropactivitiestransports" => $fpropactivitiestransports,"fpropactivitytitle" => $fpropactivitytitle,"fpropnodates" => $fpropnodates,"fpropactivitydates" => $fpropactivitydates);

	$jsn = json_encode($arr);
	echo $jsn;
?>
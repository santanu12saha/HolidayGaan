<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$dflag = "1";	
$qry = $dbConnection->prepare("SELECT * FROM tble_activities WHERE delflg=?");
$qry->execute(array($dflag)); 
if($qry->rowCount() >0)
{
	while ($row = $qry->fetch())
	{
		$activity_name = $row['activity_name'];
		$response[]=array("name"=>$activity_name);
	}
echo json_encode($response);
}
else
{
    $response["success"] = 0;
    $response["message"] = "No result found";
    echo json_encode($response);
}
?>
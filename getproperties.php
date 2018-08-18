<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");

$dflag = "1";	
$qry = $dbConnection->prepare("SELECT * FROM tble_property WHERE delflag=?");
$qry->execute(array($dflag)); 
if($qry->rowCount() >0)
{
	while ($row = $qry->fetch())
	{
		$property_name = $row['property_name'];
		$response[]=array("name"=>$property_name);
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
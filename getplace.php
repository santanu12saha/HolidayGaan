<?php
error_reporting(0);
session_start();
include_once ("db/db_connection.php");	
	
$dflag = "1";
$response = array(); 
$qry = $dbConnection->prepare("SELECT DISTINCT property_location FROM tble_property WHERE delflag=? ORDER BY property_location ASC");
$qry->execute(array($dflag));
if($qry->rowCount() >0)
{
    $response["place"] = array();
    while($row = $qry->fetch())
    {
        $place = array();
        $place["location"] = $row["property_location"];
        array_push($response["place"], $place);
    }
    echo json_encode($response["place"]);
}
else
{
    $response["success"] = 0;
    $response["message"] = "No products found";
    echo json_encode($response);
}
?>
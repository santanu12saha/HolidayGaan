<?php
error_reporting(E_ALL);
session_start();

$post_data = file_get_contents("php://input");
$data = json_decode($post_data);

$placeimg = $data->placeimg;
unset($_SESSION['budget']);
$_SESSION['budget']=="";
  
$place = $_SESSION['place'];
$date = date("Y-m-d");
$inc1date = strtotime("+2 day", strtotime($date));
$inc11date = date('d-m-Y',$inc1date);
$inc2date = strtotime("+5 day", strtotime($date));
$inc22date = date('d-m-Y',$inc2date);
$_SESSION['fromd'] = $inc11date;
$_SESSION['tod'] = $inc22date ;
$_SESSION['guests'] = "2 Guest";
$_SESSION['placeimg'] = $placeimg;
if($placeimg=="")
{
$_SESSION['place'] = $place;
}
else
{
$_SESSION['place'] =$placeimg;
}
$fplace = $_SESSION['place'];
$ffromd = $_SESSION['fromd'];
$ftod = $_SESSION['tod'];
$fguests = $_SESSION['guests'];
$arr = array("placeimg"=>"$placeimg","place" => "$fplace","fromd" => "$ffromd","tod" => "$ftod","guests" => "$fguests");
$jsn = json_encode($arr);
echo $jsn;
?>
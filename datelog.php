<?php
error_reporting(0);
session_start();

$post_data = file_get_contents("php://input");
$data = json_decode($post_data);

$fromd = $data->fromd;
$tod = $data->tod;
$guest = $data->guest;

  
$_SESSION['fromd'] = $fromd;
$_SESSION['tod'] = $tod;
$_SESSION['guests'] = $guest;

$ffromd = $_SESSION['fromd'];
$ftod = $_SESSION['tod'];
$fguest = $_SESSION['guests'];
$arr = array("fromd" => "$ffromd","tod" => "$ftod","guest"=>"$fguest");
$jsn = json_encode($arr);
echo $jsn;
?>
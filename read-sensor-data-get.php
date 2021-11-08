<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'IOT';
if($_GET)
{
$uid = $_GET['uid'];
$name = $_GET['name'];
$link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$link)
{
echo "Error:";
exit();
}
$sql = "SELECT `VALUE` FROM `SENSOR DATA` WHERE `SENSOR NAME` = '$name' AND `USER ID` = '$uid'";
$result = mysqli_query($link, $sql);
if(!$result)
{
echo "Error:";
}else{
$val = mysqli_fetch_array($result);
echo $val['VALUE'];
}
mysqli_close($link);
}
?>
<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'IOT';
if($_POST)
{
$uid = $_POST['uid'];
$name = $_POST['name'];
$link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$link)
{
echo "Error:";
exit();
}
$sql = "SELECT `VALUE` FROM `DEVICE DATA` WHERE `DEVICE NAME` = '$name' AND `USER ID` = '$uid'";
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


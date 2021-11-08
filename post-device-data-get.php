<?php
$dbHost = 'localhost:3306';
$dbUsername = 'myschool_tryDB';
$dbPassword = 'ilovewisdom2';
$dbName = 'IOT';
if($_GET)
{
$uid = $_GET['uid'];
$name = $_GET['name'];
$value = $_GET['value'];
$link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$link)
{
echo "Error:";
exit();
}
$sql = "UPDATE `DEVICE DATA` SET `VALUE` = $value WHERE `DEVICE NAME` = '$name' AND `USER ID` = '$uid'";
if(mysqli_query($link, $sql))
{
echo "success";
}else {
echo "Error:";
}
mysqli_close($link);
}
?>


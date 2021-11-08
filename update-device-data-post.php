<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'IOT';
if($_POST)
{
$uid = $_POST['uid'];
$name = $_POST['name'];
$value = $_POST['value'];
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


<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'device data';
if($_GET)
{
$link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$link)
{
die("could not connect" .mysqli_connect_error());
}
echo "connected succesfully";
$sql = "INSERT INTO `avt101`(`Input Power (W)`, `Output Power (W)`, `Battery Voltage (VDC)`, `Output Voltage (VAC)`) VALUES ('500W', '500W', '12V', '240V')";
if(mysqli_query($link, $sql))
{
echo "sql query executed succesfully";
}else {
echo "Query did not work".mysqli_error($link);
}
mysqli_close($link);
?>
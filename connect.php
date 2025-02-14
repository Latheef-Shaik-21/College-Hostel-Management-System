<?php
$host="localhost";
$userid="root";
$password='';
$db_name="hostel";
$connect=mysqli_connect($host,$userid,$password,$db_name);
if(mysqli_connect_errno())
{
die("failed to connect with MySQL:".mysqli_connect_error());
}

?>
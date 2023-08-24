<?php
include("config.php");
mysql-select-db($conn,'mydp;);
$result=mysql-query($conn,SELECT*FROM user");
echo $row['fname'],"--",$row['lname'],"--",$row['email'],"--",$row['contact'],"--",$row['password'];
?>

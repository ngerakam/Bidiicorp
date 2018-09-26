<?php

$pass="";
$user="root";
$my_db="bidiicorp";

$my_db=new mysqli('localhost',$user,$pass,$my_db);
if (!$my_db) {
	# code...
	die("could not connect:".mysql_error());
}
?>
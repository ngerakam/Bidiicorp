<?php
//first we get the post variables

$name=$_POST["name"];
$UserName=$_POST["username"];
$email=$_POST["inputEmail"];
$Area=$_POST["AREA"];
$idNumber=$_POST["ID-NUMBER"];

$pass="";
$user="root";
$my_db="bidiicorp";

$my_db=new mysqli('localhost',$user,$pass,$my_db);
if (!$my_db) {
	# code...
	die("could not connect:".mysql_error());
}else{
	
}

$myinput ="INSERT INTO farmer(name,UserName,email,Area,idNumber) VALUES('$name','$UserName','$email','$Area','$idNumber')";
$result= mysqli_query ($my_db,$myinput);
 
if (!$result) {
 	# code...
  die("Unable to insert:$myinput");
  }
    header('refresh:2; url=home.html');

?>
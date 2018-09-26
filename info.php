<?php
$host="localhost";
$pass="";
$user="root";
$my_db="bidiicorp";


$objective=trim($_POST['objective']);
$phone=trim($_POST['phone']);
$pic=trim($_FILES['pic']['name']);

$my_db=new mysqli($host,$user,$pass,$my_db);
if (!$my_db) {
	# code...
	die("could not connect:".mysql_error());
}

$input ="INSERT INTO userdata(objective,profilepic,phone) VALUES('$objective','$pic','$phone')";
$result= mysqli_query ($my_db,$input);
 
if (!$result) {
 	# code...
  die("Unable to insert:$input");
  }else{
    echo "you have been registerd";
  }
?>

<?php

$host = "localhost";
$pass="";
$user="root";
$my_db="bidiicorp";

$UserName=trim($_POST["username"]);
$idNumber=trim($_POST["ID-NUMBER"]);

$my_db = new mysqli($host,$user,$pass,$my_db);

if ($my_db->connect_error){
	# code...
	die("could not connect:".$my_db->connect_error);
}
/*
if ($getdb->msql_numrows >0) {
	$get=$getdb->mysql_fetch_array();
	if (password_verify($idNumber, $get['idNumber'])) {
		# code...
		echo "Welcome :$UserName";
	header("refresh:2, url=client.html");
	}
}else{
	header("refresh: url =signup.html")
}
*/
else{
	$getdb="SELECT * from farmer WHERE idNumber='$idNumber' AND UserName = '$UserName'";
	$result = $my_db -> query($getdb);
	if($result->num_rows>0){
		session_start();
		$_SESSION['username']= $UserName;
		echo "Welcome : ".$_SESSION['username'];
	header("refresh:2, url=client.php");
	}
	else{
		echo "User authentication failed!";
		header("refresh:2 url =signup.html");
	}
}
	?>

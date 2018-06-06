<?php
$host="localhost";
$db_user="place user here";
$db_password="password here";
$db_name="db name here";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);


$phone=$_POST["phoneno"];
$password=$_POST["password"];


$sql="delete from new_blood where phoneno like '".$phone."' and password like '".$password."';";


$result=mysqli_query($con,$sql);

$res=array();


$message="done";
array_push($res,array("message"=>$message));
echo json_encode($res);


mysqli_close($con);


?>

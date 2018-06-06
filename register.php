<?php
$host="localhost";
$db_user="place user here";
$db_password="password here";
$db_name="db name here";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);

$name=$_POST["name"];
$phone=$_POST["phoneno"];
$password=$_POST["password"];
$dob=$_POST["dob"];
$bloodgroup=$_POST["bloodgroup"];
$state=$_POST["state"];

$sql="select * from new_blood where phoneno like '".$phone."';";

$result=mysqli_query($con,$sql);
$res=array();

if(mysqli_num_rows($result)>0)
{
 
  $message="user already exist.......";
  array_push($res,array("message"=>$message));
  echo json_encode($res);

 
}
else
{

  $sql="insert into new_blood (name,phoneno,password,dob,bloodgroup,state) values('".$name."','".$phone."','".$password."','".$dob."','".$bloodgroup."','".$state."');";
  $result=mysqli_query($con,$sql);
 $message="Thank you for registering";
  array_push($res,array("message"=>$message));
  echo json_encode($res);

} 
mysqli_close($con);


?>

<?php
$host="localhost";
$db_user="place user here";
$db_password="password here";
$db_name="db name here";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);


$phone=$_POST["phoneno"];
$password=$_POST["password"];


$sql="select * from new_blood where phoneno like '".$phone."'and password like'".$password."';";

$result=mysqli_query($con,$sql);
$res=array();

if(mysqli_num_rows($result)>0)
{
 $row=mysqli_fetch_row($result);
 $message="Successfully Logged In";
 array_push($res,array("message"=>$message,"name"=>$row[0],"phoneno"=>$row[1],"dob"=>$row[3],"bloodgroup"=>$row[4],"state"=>$row[5]));
  echo json_encode($res);

 
}
else
{

 $message="Use Does Not Exist";
  array_push($res,array("message"=>$message));
  echo json_encode($res);

} 
mysqli_close($con);


?>

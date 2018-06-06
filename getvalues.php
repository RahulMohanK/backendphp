<?php


$host="localhost";
$db_user="place user here";
$db_password="password here";
$db_name="db name here";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);

$bloodgroup=$_POST["bloodgroup"];


$sql="select name,phoneno from new_blood where bloodgroup like '".$bloodgroup."' and state='0' ORDER BY name;";


$result=mysqli_query($con,$sql);
$res=array();


while($row=mysqli_fetch_array($result))
{
array_push($res,array("name"=>$row["name"],"phoneno"=>$row["phoneno"]));
}
echo json_encode(array("details"=>$res));

mysqli_close($con);

?>



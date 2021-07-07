<?php  
ob_start();
require("utility.php"); ?>

<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="data/img/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO user (username,fullname,password,email,gender,dob,user_type,state,country,uimg) values ('$u_name','$f_name','$pwd','$email','$gender','$dob','user','$sta','$cou','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:notification.php");
}
else
{
		header("location:registerV.php");
}
?> 	
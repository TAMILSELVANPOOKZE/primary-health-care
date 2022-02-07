<?php

	require ('db_connect.php');


$username=$_POST['sname'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];
$age=$_POST['age'];





$sql="INSERT INTO `reg`(`name`,`age`,`pass`,`mobile`)
VALUES ('$username','$age','$pass','$mobile')";
if($conn->query($sql)==TRUE)
{
 echo "<script>alert('Added  Successfully!');</script>";
 echo "<script type='text/javascript'>

 window.location.href = 'login.php';
 </script>";
}
else
{
echo "Error: ".$sql."<br>".$conn->error;

}
?>





















<?php

	require ('db_connect.php');


$username=$_POST['user'];
$pass=$_POST['pass'];



$sql="INSERT INTO `login`(`uname`,`password`)
VALUES ('$username','$pass')";
if($conn->query($sql)==TRUE)
{
 echo "<script>alert('Added  Successfully!');</script>";
 echo "<script type='text/javascript'>

 window.location.href = 'index.php';
 </script>";
}
else
{
echo "Error: ".$sql."<br>".$conn->error;

}
?>





















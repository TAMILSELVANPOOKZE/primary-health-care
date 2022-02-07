

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Primary Health Center</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  h3{
    font-family: auto;
    font-weight: bold;
    color: cadetblue;
}
</style>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" 

      style="margin-right: -24px; margin-left: -37px; margin-top: -24px; background-color: #c2b1d7fa!important;">
   
   
        <div class="container-fluid">
            <span><img src="images/logo.png" style= "  height: 52px;
    width: 117px;
   
    margin-left: -22px;"></span>
            <h3 class="navbar-brand" style="margin-left: -29px; margin-top:9px;">Primary Health Center</h3>
            <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="login.php" class="nav-item nav-link active">Home</a>
                     <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="gallery.php" class="nav-item nav-link active">Gallery</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Inbox</a>
                            <a href="#" class="dropdown-item">Sent</a>
                            <a href="#" class="dropdown-item">Drafts</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link active">Logout</a>
                </div>
            </div>
        </div>
    </nav>
     </div>
     
          <img  src="images/hsptl6.jpg" alt="First slide" style="width: 100%;
    margin-top: -24px;"><br><br>
    <br>
     
    <form action="login.php" method="POST">

 
  <select name="cars" style="padding: 6px;border-radius: 6px;
    margin-right: 18px;margin-left: 81px;margin-top: -2px;padding-right: 84px;">
    <option value="Athoor">Athoor</option>
    <option  value="Nilakottai">Nilakottai</option>
    <option value="Dindigul">Didnigul</option>
   
  </select>
  <button type="submit" name="submit" ><i class="fa fa-search"></i></button>


  
    </form>

  
  <br>
  <div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">

    <!--Table head-->
    
<?php
include_once 'db_connect.php';
if(isset($_POST['submit']))
{
$val=$_POST['cars'];
//echo $val;
//$sql = "SELECT * FROM register WHERE district = ' + $val + '";
$result = mysqli_query($conn,"SELECT * FROM register WHERE block = '$val'");

?>
<?php
if (mysqli_num_rows($result)>0) {
  
?>
<table class='table table-bordered table-striped'>
<tr>
  <th>Hospital Code</th>
     
      <th>Location</th>
    
       <th>   Facility in Hospital </th>
       <th>Ambulance Availablity</th>
        <th>Total Bed</th>
        <th>need facility</th>
        <th>Covered Areas</th>

       
      
       <th>HelpLine</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
  
?>
<tr>
<td><?php echo $row["sno"]; ?></td>
<td><?php echo $row["location"]; ?></td>
<td><b><?php echo $row["Facility"]; ?><b></td>
<td><?php echo $row["ambulance"]; ?></td>
<td><?php echo $row["totalbed"]; ?></td>
<td><b><?php echo $row["needfacilty"]; ?><b></td>
<td><?php echo $row["area"]; ?></td>
<td><?php echo $row["helpline"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
}
else{
echo "";
}
?>
 
  </table> 
 
</div>
<br><br><br>




  <footer class="bg-light text-center text-white">


 
  

  <div class="text-center p-3" style="background-color: #c2b1d7fa!important; margin-left: 0px;    margin-top: 183px;
    margin-right: 0px;">
    ©2021Copyright:
    <a class="text-white" href="mailto: tamilscreativity@gmail.com">tamilscreativity@gmail.com</a>
    

  </div>
  
</footer>
  








  </body>
  </html>

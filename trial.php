<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bed Availablity</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" 

      style="margin-right: -24px; margin-left: -37px; margin-top: -24px; background-color: #c2b1d7fa!important;">
   
   
        <div class="container-fluid">
            <span><img src="images/logo.png" style= "  height: 52px;
    width: 117px;
   
    margin-left: -22px;"></span>
            <h3 class="navbar-brand" style="margin-left: -26px;">Bed Availablity</h3>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
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
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
     </div>
     
          <img  src="images/hsptl6.jpg" alt="First slide" style="width: 100%;
    margin-top: -24px;"><br><br>
    <br>
    <div class="search-container">
    <form action="#" method="GET">
      &nbsp;&nbsp;<strong>District Name:</strong>
      &nbsp;<input type="text"  name="search" value= "<?php if(isset($_GET['search'])){echo $_GEt['search'];}?>" placeholder="serach..." >
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>

  </div>
  <div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">

    <!--Table head-->
    <thead>
      <tr>
        <th>S.No</th>
      <th>Hsptl Name</th>
      <th>Total Bads</th>
    
       <th>Normal Beds</th>

       <th>Oxygen Beds</th>
       <th>ICU Beds</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
    $conn=mysqli_connect("localhost","root","","hospital");

    if(isset($_GET['search']))
    {
    	$filter=$_GET['search'];
    	$query="SELECT * FROM register WHERE CONCAT(sno,hsptlname,totalbed,normalbed,oxygenbed,icubed) LIKE '%$filter%' ";
    	$query_run=mysqli_query($conn,$query);

    	if(mysqli_num_rows($query_run)>0){
    		foreach($query_run as $row){
    			?> 
    			<tr>
    				<td><?php echo $row["sno"]; ?></td>
<td><?php echo $row["hsptlname"]; ?></td>
<td><?php echo $row["totalbed"]; ?></td>
<td><?php echo $row["normalbed"]; ?></td>
<td><?php echo $row["oxygenbed"]; ?></td>
<td><?php echo $row["icubed"]; ?></td>
</tr>
    			</tr>



    			<?php 
    		}

    	}
    	else{
    		?>
    		<tr>
    			<td>no record found</td>
    		</tr>
    		<?php

    	}
    }
             ?>

    	
    </tbody>
    
    <!--Table head-->

    <!--Table body-->
   
    <!--Table body-->
  
  <!--Table-->
</div>

  <!--Table-->

</tbody>
</table>
  <br>
</body></html>
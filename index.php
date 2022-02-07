<?php 
session_start();
include 'db_connect.php';


if(isset($_SESSION['user']))   // Checking whether the session is already there or not if                 // true then header redirect it to the home page directly
 {
    session_destroy();
    header("Location:register.php");
 }

if(isset($_POST['login']))   
{
   $user = $_POST['user'];
   $pass = $_POST['pass'];
     $res= mysqli_query($conn,"SELECT * FROM `reg` where `name`='$user' and `pass`='$pass'")or die (mysql_error());
     while($row_r=mysqli_fetch_array ($res) )
     {                    
      $_SESSION['user']=$row_r['name'];
      
      echo "<script>alert('Login success!');</script>";
      echo '<script type="text/javascript"> 
      window.open("login.php","_self");
      </script>';            //  On Successful Login redirects to home.php


        }

       

}
 ?>




<html>
    <head>
        <title>Primary Health Center</title>
        <meta charset="UTF-8">
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
        <style>
          body{
          background-image: linear-gradient(to bottom right, #ddc7c9fc, #c2b1d7fa);}
            table{
              
               padding: 100px;
               margin-top: 90px;
            }
            input{
             border: none;
 
               outline: none;
        border-radius: 10px;
               width: 188px; 
            height: 25px;
        }

           #btn{
                border-radius: 11px;
              height: 32px;
              width: 115px;
              font-weight: 900;
              border: 11px;
                  background-color: oldlace;

          }
          .btn:hover {
  opacity: 2;}
  h3{
    font-family: auto;
    font-weight: bold;
    color: cadetblue;
}
          
      </style>
    </head>
    <body >
      <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" 

      style="margin-right: -24px; margin-left: -37px; margin-top: -24px; background-color: #c2b1d7fa!important;">
   
   
        <div class="container-fluid">
            <span><img src="images/logo.png" style= "  height: 52px;
    width: 117px;
   
    margin-left: -22px;"></span>
            <h3 class="navbar-brand" style="margin-left: -29px; margin-top:9px;">Primary Health Center</h3>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
               
            </button>
          
            </div>
        </div>
    </nav>
     </div>
         <form method="post" >
             <table  align="center" style="margin-top: 166px;">
              <tr><td style="font-weight: bold;">
                      User Name</td><td><input type="text" name="user" required ></td></tr>
                      <tr>
                        <td></td>
                      </tr>
                       <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr>
                      
                      


               
                         <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr>

                   <tr><td style="font-weight: bold;">
                           Password</td><td><input type="Password" name="pass"></td></tr>
                    
                     <td> </td>
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr><tr>
                        <td></td>
                        <td><a href="register.php">Register here</a></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr><tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr><tr>
                        <td></td>
                      </tr>
                       <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr> <tr>
                        <td></td>
                      </tr>

                       <tr>
                        <td></td><td><button type="submit" name="login" id="btn">Submit</button> </td></tr>
            
             </table>

            
           </form>
           <footer class="bg-light text-center text-white">


 
  

 <div class="text-center p-3" style="background-color: #c2b1d7fa!important;margin: -6px 1px;
    margin-top: 164px;;">
    ©2021Copyright:
    <a class="text-white" href="mailto: tamilscreativity@gmail.com">tamilscreativity@gmail.com</a>
    

  </div>
  
</footer>
     

    </body>
</html>

   

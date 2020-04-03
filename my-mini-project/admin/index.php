<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Notice Board Admin Dashboard</title>
	
	<link rel="stylesheet" href="style.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    

    <div class="container-fluid">
      <div class="wrapper">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		  <h2>admin</h2>
            
	    
		
			<li><a href="index.php?page=update_password"> Update Password</a></li>
      <li><a href="index.php?page=add_notice">Add New Notices</a></li>
			<li><a href="index.php?page=notices"> Manage Notices</a></li>
      <li><a href="index.php?page=logout">Logout</a></li>
			
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  				
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notices")
			{
				include('manage_notices.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			
			if($page=="logout")
			{
				include('logout.php');
			
			}
			
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header">DASHBOARD</h1>
		  
		
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="image/image2.png" width="200" height="200" class="img-responsive" >
              <h4>Add New Notice</h4>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="image/image1.png" width="200" height="200" class="img-responsive" >
              <h4>Manage Notices</h4>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="image/image3.png" width="200" height="200" class="img-responsive" >
              <h4>Update Password</h4>             
            </div>
            
          </div>
		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/vendor/holder.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

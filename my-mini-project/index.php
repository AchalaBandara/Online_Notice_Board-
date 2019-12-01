<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1">
		<title>Welcome to Online Notice Board</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		
	</head>
<body>

<section id="nav-bar">
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Online Notice Board</a>			
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav navbar-left">
				<li><a class="active" href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">View Notices</a></li></ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#loginmodal" data-toggle="modal">Login</a></li>
			</ul>
		
		</div>
		
	</div>

</nav>
</section>




<section id="banner">
<div class="container">
<div class="row">
<div id="home">
	<div class="landing-text">
		<h1>Online Notice Board</h1>
		<h2>Faculty of Applied Sciences</h2>
		<h3>Sabaragamuwa University of Sri Lanka</h3>
	</div>
</div>
</div>
</div>
</section>

<section>


<div class="container">
<div class="row">
<div class="col-md-8">
<p class="promo-title"><b>Welcome to the Faculty of Applied Sciences</b></p>
<p>The Faculty of Applied Sciences of the Sabaragamuwa University of Sri Lanka was 
initially started as the Buttala Affiliated University College (BAUC) on 21st June 1993.
 The BAUC offered two diploma courses, one in Food Science and Technology and the other in 
 English Language. With the elevation of the Affiliated University Colleges to fully fledged
 national Universities in early 1996, three Affiliated University Colleges; 
 Sabaragamuwa Affiliated University College, Uva Affiliated University College and
 Buttala Affiliated University College were amalgamated to form the Sabaragamuwa University
 of Sri Lanka and the BAUC became the Faculty of Applied Sciences of the Sabaragamuwa University 
 of Sri Lanka. With effect from March 2008, the faculty has been relocated in the main campus premises at Belihuloya.</p>

</div>
		
		
<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>Latest News/ Events</b></div>
  <div class="card">
  <div class="card-body">
    <h5 class="card-title"><b>Title</b></h5>
    <p class="card-text">You can see the latest news of the faculty here.</p>
    <a href="#!" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>
		
		</div>


</section>

<form method="post" id="loginform">
      <div class="modal" id="loginmodal" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>LOGIN</center></h4>
          </div>
                    <div class="modal-body">
                                             
                         <label>Email</label>
						 <input type="email" name="email" id="email" class="form-control" />
						 <label>Password</label>
						 <input type="password" name="password" id="password" class="form-control" />
                        <div class="checkbox">
                        <label>
                            <input type="checkbox" name="rememberme" id="rememberme">
                            Remember Me
                            </label>
                              <a class="pull-right" style="cursor:pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                        Forgot Password?
                        </a>
                        </div>  

						 <div class="modal-footer">
                        <button type="button" name="login_button" id="login_button" class="btn btn-success" data-toggle="modal" data-target="#loginmodal" >Login</button>
                        
                        
          </div>
          </div>



	   <script src="js/cdnAjax.js"></script>
	   <script src="js/cdn.js"></script>
</body>
</html>


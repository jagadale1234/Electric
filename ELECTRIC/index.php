<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links/link.php';?>
</head>
<body>
	<nav class="navbar navbar-expand-lg p-4 bg-dark navbar-dark">
  		<a class="navbar-brand pl-5" href="index.php">Riders Providers</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <div class="navbar-nav ml-auto pr-5">
		      	<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal1">Login</button>

				<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal2">Signup</button>

		    </div>
		  </div>
	</nav>
	<br>
	<br>
	<br>
	<div class="main-header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center ">
					<img src="images/SmartCities.jpeg" height=400 width=400>
				</div>
			</div>

			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Smart Electric Bill</h1>
				</div>
			</div>
		</div>
	</div>

	
<div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h4 class="modal-title" id="myModalLabel">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
          </div>
          <div class="modal-body">
          	<form action="validation.php" method="post">
			  <div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" placeholder="Enter email" name = "user">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="Password" class="form-control" name = "password" placeholder="Password">
			  </div>
			  <button type="Submit" class="btn btn-primary">Submit</button>
			</form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>



<div class="modal hide fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h4 class="modal-title" id="myModalLabel">Signin</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
          </div>
          <div class="modal-body">
          	<form action = "registration.php" method="post">
			  <div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name = "user">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="Password" class="form-control" name = "password" placeholder="Password">
			  </div>
			  <button type="Submit" class="btn btn-primary">Submit</button>
			</form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss = "modal">cancel</button>
          </div>
        </div>
      </div>
    </div>
</body>
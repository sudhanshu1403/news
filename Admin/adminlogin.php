<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
   <header class="headbg py-2">
   	 <div class="container">
   	 	<div class="row">
   	 		<div class="col-md-2">
   	 			<a href="index.php"> <img class="img-fluid" src="assets/images/logo.png"></a>
   	 		</div>
   	 		<div class="col-md-6 text-right pt-3">
   	 			 <a class="text-white " href="adminlogin.php"><i class="fa fa-user"></i> 
   	 			 Faculty Login</a>
   	 		</div>
   	 	</div>
   	  </div>
   </header>
   <section>
   	<div class="container">
   		<div class="row justify-content-center">
   			<div class="col-md-6">
   				<div class="card my-5">
   					<div class="card-body">
   						<div class="text-center">
   							<img class="mt-n5" src="assets/images/admin.png " width="150" height="150 ">
   						</div>
   						<h2 class="text-center text-muted">Admin Login</h2>
   				<form method="post" action="check.php">
   					
   					<div class="form-group text-center">
   						<label for="email" ><b>Enter Email Id</b></label>
   						<input  class="form-control rounded-pill" placeholder="Enter Email Id.." type="text" name="email">
   					</div>
   					<div class="form-group text-center">
   						<label for="password" ><b>Enter password</b></label>
   						<input  class="form-control rounded-pill" placeholder="Enter password .." type="password" name="password">
   					</div>
   					<div class="mt-5 text-center">
   						
   						<input class="btn btn-dark font-weight-bold text-center" type="submit" name="submit" >
   					</div>
   				</form>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
    <footer class="footbg py-5">
   	 <div class="container">
   	 	<div class="row justify-content-center text-center">
   	 		<div class="col-md-3">
   	 			<a class="text-dark" href="#">Result Portal</a>
   	 		</div>
   	 		<div class="col-md-3">
   	 			<a class="text-dark" href="adminlogin.php"><i class="fa fa-user"></i> Faculty Login</a>
   	 		</div>
   	 		<div class="col-md-12 mt-4">
   	 			<p>&copy;All rights reserved 2022</p>
   	 		</div>
   	 	</div>
   	 </div>
   </footer>	
</body>
</html>
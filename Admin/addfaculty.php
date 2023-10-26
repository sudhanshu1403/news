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
  <?php include"adminheader.php";  ?>
   <section>
   	<div class="container-fluid">
   		<div class="row">
   			<div class="col-md-3">
   				<div class="card">
   					<div class="card-header">
							<i class="fa fa-user-circle"></i>
							kapil sharma
   					</div>
   					<div class="card-body">
   						<?php include"menu.php";  ?>
   					</div>
   				</div>
   			 </div>
   			
   				 		<div class="col-md-9">
   				 			<form>
   				 				<div class="card">
   				 					<div class="card-header">
   				 							Add faculty
   				 						</div><!----crd hdr end---->
   				 					<div class="card-body">
   				 						<div class="form-group">
   				 							<label>Name</label>
   				 							<input class="form-control rounded-pill" type="text" name="name">
   				 						</div><!------form group div end---->
   				 						<label>Email</label>
   				 						<input class="form-control rounded-pill" type="text" name="email">
   				 					</div><!-----cardbody div end---->
   				 					<div class="card-footer">
   				 						<button class=" bg-dark text-white">Submit</button>
   				 					</div><!---crd foot end---->
   				 				</div><!------caed div end---->
   				 			</form>

   				 		</div><!----col md 9 min div end---->	 	
   			</div>
   		</div>
   </section>
</body>
</html>

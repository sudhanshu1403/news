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
   				<form method="post" action="">
   					<div class="card">
   						<div class="card-header">Upload Student Result</div>
   							<div class="card-body">
   								<div class="input-group">
   									<div class="form-group w-50">
   										<label>Studen Name</label>
   										<input class="form-control rounded-pill" type="text" name="">
   									</div>
   									<div class="form-group w-50">
   										<label>Class</label>
   										<input class="form-control rounded-pill" type="text" name="">
   									</div>
   								 
   								<div class="form-group w-50">
   										<label>Roll Number</label>
   										<input class="form-control rounded-pill" type="text" name="">
   								</div>
   								<div class="form-group w-50">
   										<label>Father Name</label>
   										<input class="form-control rounded-pill" type="text" name="">
   								</div>
				          	</div>
   						</div>
   					</div>
   				</form>
   			</div>
   		</div>
   	</div>	
   </section>
</body>
</html>

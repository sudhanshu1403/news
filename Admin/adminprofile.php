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
   	 			<a class="text-white" href="adminprofile.php">
   	 			 <img  height="50" width="50" src="assets/images/admin.png">
   	 			 Admin</a>
   	 		</div>
    	 		<div class="col-md-8 text-center">
    	 			<a class="text-white" href="index.php">
    	 				<i class="fa fa-home fa-2x"></i>
    	 			</a>
    	 		</div>
   	 		<div class="col-md-2 text-right pt-2">
   	 			 <nav class="d-flex justify-content-between">
   	 			 	<a class="text-white " href="setting.php">
   	 			 		    <i class="fa fa-lock fa-2x"></i></a>
   	 			 	<a class="text-white " href="adminprofile.php">
   	 			 		<i class="fa fa-user-circle fa-2x"></i></a>
   	 			 		  <a class="text-white " href="logout.php">
   	 			 		    <i class="fa fa-key fa-2x"></i></a>
   	 			 </nav>

   	 		</div>
   	 	</div>
   	  </div>
   </header>
   <section>
   	<div class="container-fluid">
   		<div class="row">
   			<div class="col-md-3">
   				<div class="card ">
   					<div class="card-header">
							<i class="fa fa-user-circle"></i>
							kapil sharma
   					</div>
   					<div class="card-body">
   						<?php include"menu.php";  ?>
   					</div>
   				</div>
   			 </div>
   			<div class="col-md-9 ">
   				<div class="container ">
   					<div class="row">
   						<div class="col-md-4">
   							<div class="card">
   								<div class="card-header bg-dark text-white">
   									Total Student
   								</div>
   								<div class="card-body text-center text-white headbg">
   									<i class="fa fa-users fa-2x mr-2"></i>500
   								</div>
   						</div>
   					</div>
   					<div class="col-md-4">
   							<div class="card ">
   								<div class="card-header bg-dark text-white ">
   									Total Faculty
   								</div>
   								<div class="card-body text-center text-white headbg">
   									<i class="fa fa-users fa-2x mr-2"></i>200
   								</div>
   						</div>
   					</div>
   					<div class="col-md-4">
   							<div class="card">
   								<div class="card-header text-white bg-dark">
   									Total Result
   								</div>
   								<div class="card-body text-center text-white bg-warning">
   									<i class="fa fa-users fa-2x mr-2"></i>200
   								</div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>	
   </section>
</body>
</html>

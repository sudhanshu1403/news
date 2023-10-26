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
   			  <div class="container-fluid">
   			  	<div class="row justify-content-center">
   			  		<div class="col-md-9">
   			  			<form method="post" action="demo.php">
   			  				<div class="card">
   			  					<div class="card-header">Upload student result</div>
   			  					<div class="card-body">
   			  						<div class="input-group">
   			  							<div class="form-group w-50">
   			  								<label for="name">Student Name</label>
   			  								<input class="form-control rounded-pill" type="text" placeholder="Enter student name..." name="name" required>
   			  							</div>
   			  							<div class="form-group w-50">
   			  								<label for="stclass">Class</label>
   			  								<input class="form-control rounded-pill" type="text" name="cls" placeholder="Enter class name..." required>
   			  						</div>
   			  					</div>
   			  					<div class="input-group">
   			  							<div class="form-group w-50">
   			  								<label for="roll number">Roll Number</label>
   			  								<input class="form-control rounded-pill" type="text" placeholder="Enter roll number..." name="name" required>
   			  							</div>
   			  							<div class="form-group w-50">
   			  								<label for="stclass">Father Name</label>
   			  								<input class="form-control rounded-pill" type="text" name="name" placeholder="Enter student father name..." required>
   			  						</div>
   			  					</div>
   			  					<div class="input-group">
   			  						<div class="form-group w-50">
   			  							<label for="subject1">Subject1</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter subject" name="" required>
   			  					</div>
                                <div class="form-group w-50">
   			  							<label for="subject1">Marks1</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter student name" name="mark" required>
   			  				</div>
   			  			</div>
   			  			<div class="input-group">
   			  						<div class="form-group w-50">
   			  							<label for="subject2">Subject2</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter subject" name="subject2" required>
   			  					</div>
                                <div class="form-group w-50">
   			  							<label for="marks2">Marks2</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter student name" name="marks2" required>
   			  				</div>
   			  			</div>
   			  			<div class="input-group">
   			  						<div class="form-group w-50">
   			  							<label for="subject3">Subject3</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter subject" name="subject3" required>
   			  					</div>
                                <div class="form-group w-50">
   			  							<label for="marks3">Marks3</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter student name" name="marks3" required>
   			  				</div>
   			  			</div>
   			  			<div class="input-group">
   			  						<div class="form-group w-50">
   			  							<label for="subject4">Subject4</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter subject" name="subject4" required>
   			  					</div>
                                <div class="form-group w-50">
   			  							<label for="marks4">Marks4</label>
   			  							<input class="form-control rounded-pill" type="text" placeholder="Enter student name" name="marks4" required>
   			  				</div>
		  			  		</div>
		  			  	</div>
		  			  	<div class="card-footer">
		  			  		<button class="btn btn-info">Submit</button>
		  			  	</div>
   			  	 </div>
		  			</form>	
   			  </div>
   			</div>
   		</div>
   	</div>	
   </section>
</body>
</html>

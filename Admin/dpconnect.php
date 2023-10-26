<?php   
   session_start();
      $db=mysqli_connect("localhost","root","","resultportal");

if(mysqli_connect_error())
   {
   	 echo 'data Successfully connected'.mysqli_connect_error();
   	 exit();
   }

 ?>
<?php 
include"dpconnect.php";

if(isset($_POST['email']))
{
$email=$_POST['email'];
$password=$_POST['password'];
if($email=="")
{
  echo 'Please enter email id...'; 
}
elseif ($password=="") {
   echo 'Please enter correct password';
}
else {

   $checking=mysqli_query($db,"SELECT * FROM userlogin where email='$email' ");
 $row=mysqli_num_rows($checking);

 if($row>0)
   {
      header("location:adminprofile.php");
   }else 
   {
      echo "No account found";
   }

}

}


 ?>


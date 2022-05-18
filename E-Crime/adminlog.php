<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>E-crime</title>
  <link rel="stylesheet" type="text/css" href="adminlog.css">
  <link rel = "icon" href = "jat1.png" type = "image/x-icon">

</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>E-Crime</h1>
		<h2>|| यतो धर्मस्ततो जय: ||</h2>
		
		</div>
	</div>
	
	
		<div class="right">
			<form action="adminlog.php" method="post">
		<h5>Admin login</h5>
				
		<div class="input">
			<input type="email" name="email" placeholder="Enter Username">
			<br>
			<input type="password" name="password"placeholder="Password">

		</div>
		<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
<input type="submit" name="submit" value="LOGIN " class="btn">
</div>
</form>
</div>
  
</body>
<?php

    
if(isset($_POST['submit']))
{
    session_start();
    include("connection.php");
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $_SESSION['u_id']=$email;
        $result=mysqli_query($con,"SELECT email,password FROM officer where email='$email' and password='$password' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          
             
        }
        else 
        {
          header("location:admin.php");
          
        }
    }                
}
?>
</html>
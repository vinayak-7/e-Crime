<!DOCTYPE html>
<html>

<head>
    <title>LOGIN TO E-CRIME</title>
    <link rel="icon" href="jat1.png" type="image/x-icon">
</head>

<style>
    body {
        background-image: url(fir.png);
        background-size: cover;
        background-color: blanchedalmond;
    }
    
    input[type=email],input[type=password] {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    
    .btn {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20%;
        float: center;
        transition: 0.5s ease-in-out;
    }
    
    .btn:hover {
        opacity: 0.8;
    }
    
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    
    .avatar {
        width: 30%;
        padding: 10px 18px;
        border-radius: 50%;
        transition: 0.8s ease-in-out;

    }
    .avatar:hover{
        width: 20%;
    }
    
    .box-form {
        margin: 0 auto;
        margin-top: 15vh;
        width: 90vh;
        height: 75vh;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.3)50%, rgba(0, 0, 0, 0.3)50%);
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        flex: 1 1 100%;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 0 20px 6px BLACK;
        color: darkblue;
    }
    a:link, a:visited {
        background-color: goldenrod;
        color: black;
        padding: 14px 25px;
        font-size: 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition: 0.5s ease-in-out;
    }
    a:hover, a:active 
    {
        opacity: 0.8;
        text-shadow: 1px 1px 2px whitesmoke;
        font-size: 20px;
    }
</style>

<body>

    <div class="box-form">
        <form action="index.php" method="post">
            <div class="imgcontainer">
                <img src="jat1.png" alt="Avatar" class="avatar">
                <br>
                <br>
                <input type="email" name="email" placeholder="Enter Email" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br><br>
                <input type="submit" name="submit" value="LOGIN" class="btn">
            </div>
            <a href="adminlog.php" >Admin</a>
            <a href="register.php" style="float: right;"> Register Now</a>
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
        $result=mysqli_query($con,"SELECT email,password FROM user where email='$email' and password='$password' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          
             
        }
        else 
        {
          header("location:user.php");
          
        }
    }                
}
?>
</html>

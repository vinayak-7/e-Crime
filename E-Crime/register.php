<!DOCTYPE html>
<html>

<head>
    <title>SIGNUP TO E-CRIME</title>
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
        width: 25%;
        padding: 10px 18px;
        border-radius: 50%;
        transition: 0.8s ease-in-out;

    }
    .avatar:hover{
        width: 20%;
    }
    
    .box-form {
        
        
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
        <form action="register.php" method="post">
            <div class="imgcontainer">
                <img src="jat1.png" alt="Avatar" class="avatar">
                <br>
                <input type="email" placeholder="Enter Email" name="email" required><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>
                <input type="password" placeholder="Repeat Password" name="cpassword" required><br>
                <input type="submit" name="submit" value="SIGNUP" class="btn">
            </div>
            <a href="adminlog.php" >Admin</a>
            <a href="index.php" style="float: right;"> LOGIN</a>
        </form>
    </div>

</body>

</html>
<?php

include("connection.php");

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

if ($password==$cpassword) {
    $query = "insert into user( email, password, cpassword) values('$email', '$password', '$cpassword')";

    $run = mysqli_query($con,$query) or die(mysqli_error());

    if ($run) {
        echo "<script type='text/javascript'>alert('Signed Up')</script>";
        header('location:user.php');
    }
    else{
        echo "failed";
    }
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIR</title>
    <link rel="stylesheet" type="text/css" href="fir.css">
    <link rel="icon" href="jat1.png" type="image/x-icon">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">E-Crime</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">HOME</a></li>
                    <li><a href="addofficer.php">ADD OFFICER</a></li>
                    <li><a href="adminlog.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
        <form action="addofficer.php" method="POST" enctype="multipart/form-data">
            <h1 class="header">Police Details</h1>
            <table border="0" width="70%" align="center" cellspacing="10" class="table">
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" placeholder="Name" required></td>
                </tr>
                <tr>
                    <td>AGE</td>            
                    <td><input type="number" name="age" placeholder="Age" min="22" required></td>
                </tr>
                </tr>
                <td>GENDER</td>
                <td><input type="radio" name="gender" value="MALE" required>
                    <label for="MALE">MALE</label><br>
                    <input type="radio" name="gender" value="FEMALE" required>
                    <label for="FEMALE">FEMALE</label><br>
                </td>
            </tr>
                <tr>
                    <td>MOBILE NUMBER</td>
                    <td><input type="tel" name="phone" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" placeholder="Mob. No." required></td>
                </tr>
                <tr>
                    <td> EMAIL</td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td>Rank</td>
                    <td><input type="text" name="rank" placeholder="Police Rank" required></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>POLICE STATION</td>
                    <td><input type="text" name="address" placeholder="Address" required></input></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="done" class="addbtn"> &nbsp;
                        <input type="reset" name="submit" class="cancelbtn">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
<?php

include("connection.php");

if (isset($_POST['done'])) {
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $rank = $_POST['rank'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    
    $query = "insert into `officer` (`name`, `age`, `gender`, `phone`, `email`, `rank`, `password`, `address`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$rank', '$password', '$address');";

    $run = mysqli_query($con,$query);

    if ($run) {
        echo "<script>alert('OFFICER ADDED')</script>";
    }
    else{
        echo "<script>alert('NAMASTE 🙏')</script>";
    }
}
?>

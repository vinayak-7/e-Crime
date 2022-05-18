<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FIR</title>
	<link rel="stylesheet" type="text/css" href="fir.css">
</head>
<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">E-Crime</h2>
			</div>
			<div class="menu">
				<ul>
                <li><a href="user.php">HOME</a></li>
					<li><a href="officer.php">OFFICER</a></li>
					<li><a href="fir.php">CRIME REPORT</a></li>
					<li><a href="law1.html">CONSTITUTION</a></li>
					<li><a href="index.php">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	  <form action="" method="POST" enctype="multipart/form-data">
	  	<h1 class="header">CRIME REPORT</h1>
        <table border="0" width="70%" align="center" cellspacing="10" class="table">
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><input type="number" name="age" min="10" required></td>
            </tr>
            <tr>
                <td>MOBILE NUMBER</td>
                <td><input type="tel" name="phone" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" required></td></tr>
            <tr>
            	<tr>
                <td> EMAIL</td>
                <td><input type="email" name="email" ></td>
            </tr>
                <td>GENDER</td>
                <td><input type="radio" name="gender" value="male" required>
                	<label for="male">MALE</label><br>
                	<input type="radio" name="gender" value="female" required>
                	<label for="female">FEMALE</label><br>
                	<input type="radio" name="gender" value="other"required>
                	<label for="other">OTHER</label>
                </td>
            </tr>
            <tr>
                <td>AADHAR NUMBER</td>
                <td><input type="tel" name="aadhar" minlength="12"pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required></td>
            </tr>
            <tr>
                <td>AREA</td>
                <td><textarea name="address" class="desc" required></textarea></td>
            </tr>
            <tr>
                <td>CRIME DETAILS</td>
                <td><textarea name="fir" class="desc" required ></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" class="addbtn"> &nbsp;
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<?php

include("connection.php");
if ($_POST['submit']) {

    $name= $_POST['name'];
    $age= $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];
    $fir = $_POST['fir'];

    $query = "insert into fir(name, age, phone, email, gender, aadhar, address, fir) values('$name', '$age', '$phone', '$email', '$gender', '$aadhar', '$address', '$fir')";

    $run = mysqli_query($con,$query);

    if ($run) {
        echo "<script>alert('FIR REPORTED')</script>";
    }
    else{
        echo "<script>alert('PLEASE CHECK SOMETHING WRONG')</script>";
    }
}
?>
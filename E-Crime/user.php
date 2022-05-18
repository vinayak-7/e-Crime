<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Crime</title>
	<link rel="stylesheet" href="style.css">
	<link rel = "icon" href = "jat1.png" type = "image/x-icon">
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
		<script type="text/javascript" charset="utf-8">
    let a;
    let time;
    setInterval(() => {
      a = new Date();
      time = a.getHours() + ':' + a.getMinutes()+ ':' + a.getSeconds();
      document.getElementById('time').innerHTML = time;
    }, 1000);
  </script>
  <h1 style="text-align: center; color:brown;">Hello!
  <span id="time"></span><br>
		<form action="user.php" method="GET" >					
			<input type="text" name="search" placeholder="Enter your aadhar number" class="box1">
			<input type="submit" name="searchbtn" value=" Search " class="box1"></h1>
		<table border="0" style="margin-left: 20px;">
			<tr>
			<?php
			include ("connection.php");
			if (isset($_GET['searchbtn'])) 
			{
				$search = $_GET['search'];

				if ($search=="")
				{
					echo "<script>alert('Search your case by entering Aadhar number')</script>";
					exit();
				}
				
				$query = "select * from fir where aadhar like '%$search%'" ;
				$data = mysqli_query($con,$query);

				if (mysqli_num_rows($data)<1)
				{
					echo "<script>alert('No Result Found')</script>";
					exit();
				}
				
	$query1 = "select * from fir where aadhar in ('$search')";
	$data1 = mysqli_query($con,$query1);

	while($row1 = mysqli_fetch_array($data1))
	{
		echo 
		"
		<tr>
		<td>
		<font size='6' color='white' >ID : $row1[0]</font><br>";
		echo "<font size='6' color='white' >NAME : $row1[1]</font><br>";
		echo "<font size='6' color='white' >AGE : $row1[2]</font><br>";
		echo "<font size='6' color='white' >PHONE : $row1[3]</font><br>";
		echo "<font size='6' color='white' >EMAIL : $row1[4]</font><br>";
		echo "<font size='6' color='white' >GENDER : $row1[5]</font><br>";
		echo "<font size='6' color='white' >AADHAR NUMBER : $row1[6]</font><br>";
		echo "<font size='6' color='white' >ADDRESS : $row1[7]</font><br>";
		echo "<font size='6' color='white'>FIR : $row1[8]</font><br>
		</td>
		</tr>";
	}
			}
			else
			{
				
			}
	
	?>
		</tr>
		</table>
</form>
	</div>
</body>
</html>
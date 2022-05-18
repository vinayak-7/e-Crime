<!DOCTYPE html>
<html>
<head>
<title>Officer Details</title>
<link rel="stylesheet" type="text/css" href="officer.css">
<link rel="icon" href="jat1.png" type="image/x-icon">
</head>
<body>
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
<?php
include('connection.php');
$query = "SELECT `name`, `age`, `gender`, `phone`, `email`, `rank`, `password`, `address` FROM `officer`";
$result = $con->query($query);
?>
<table border="1" width="80%" cellspacing="10" cellpadding="10" >
  <tr>
    <th>S.N</th>
    <th>Rank</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Police Station </th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['rank']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['age']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['phone']; ?> </td>
   <td><?php echo $data['address']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Crime</title>
    <link rel="stylesheet" href="style.css">
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
        <?php
include('connection.php');
$query = "SELECT name, age, gender, phone, email, aadhar, address, fir FROM fir";
$result = $con->query($query);
?>
<table border="1" width="100%" cellspacing="10" cellpadding="10" style="color: whitesmoke; padding-top: 20px; padding-left: 80px;">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Aadhar No</th>
    <th>Address</th>
    <th>FIR</th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['age']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['phone']; ?> </td>
   <td><?php echo $data['aadhar']; ?> </td>
   <td><?php echo $data['address']; ?> </td>
   <td><?php echo $data['fir']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table>
    </div>
</body>

</html>
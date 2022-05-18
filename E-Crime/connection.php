<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime";

$con = mysqli_connect($servername,$username,$password,$dbname); 

if($con)
{
    echo "";
}
else
{
    echo "Connection Failed";
}

?>
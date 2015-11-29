<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="student"
$sql = "SELECT * FROM `db` WHERE ID=12345";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

//mysqli_select_db($con,"student"); select dbname here
//$result = $con->query($sql);
$a=mysqli_query($con, $sql);
if($a)
echo "result";

?>
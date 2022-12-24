<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$uemail=$_POST['Email'];
$upass=$_POST['Password'];
// $exists=false;


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  

$sql = "Select * from user_tbl where uemail='$uemail' AND upass='$upass'";


// This sql query is use to check if
// the username is already present 
// or not in our Database
$result = $conn->query($sql);


    
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        include 'index1.html';
    }

}else{
    echo "0 result match!!";
}
    
?>





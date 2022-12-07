<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udml";
$email=$_POST['fmail'];
$pass=$_POST['fpass'];
// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
$sql= "SELECT * FROM customers WHERE email='$email' and 
password='$pass'";
$result=$conn->query($sql);
//check given email and password exits in given rows
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $_SESSION['email']=$email;
    $_SESSION['name']=$row['name'];
    $_SESSION['state']=$row['state'];
    $_SESSION['mobile']=$row['mobile'];
    
    header("Location:Login_success.php");
}
else
{
    echo "Email or Password are incorrect.";
}
?>
s
<?php
if(isset($_POST['cart']))
{
    session_start();
$num=$_SESSION['mobile'];
$con = new mysqli('localhost', 'root', '', 'udml');

if ($con->connect_error)
{die ("connection failed");
}


$q='insert into '
}

?>
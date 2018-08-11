<?php
$server="localhost";
//$user="id6341982_shakilssac";
//$password="samsungj7prime";
$user="root";
$password="";
$db="id6341982_lifechoice";
$conn=mysqli_connect($server,$user,$password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


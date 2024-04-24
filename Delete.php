<?php
include 'connection.php';

$userId=$_GET['id'];


$query="DELETE FROM child  WHERE CId='$userId'";
$result=mysqli_query($conn,$query);
header('location:Users.php');
?>
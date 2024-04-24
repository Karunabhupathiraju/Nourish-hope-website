<?php
include 'connection.php';

$name=$_REQUEST['name'];
$un=$_REQUEST['userName'];
$password=$_REQUEST['Password'];
$email=$_REQUEST['email'];
$phoneNumber=$_POST['PhoneNumber'];
$gender=$_POST['gender'];
if(isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    // Do something with the selected gender option
  }
  $btn=$_POST['Register'];
  echo "$btn";


//echo" $fileName";
//echo" $targetPath";

if(isset($_POST['Register']))
{
    $insertUserQuery="INSERT INTO sponsor(SName,Gender,Email,PhoneNo,UserName,Password) values ('".$name."','".$gender."','".$email."','".$phoneNumber."','".$un."','".$password."')";
        //$insertUserQuery="INSERT INTO sponsor(SName,User Name,Password,Email,Phone No,Gender) values ('".$name."','".$un."','".$email."','".$password."','".$email."','".$phoneNumber."','".$gender."')";
        $result=mysqli_query($conn,$insertUserQuery);
        $uploadStatus="Added Successfully";
        header('location:AdminLogin.html');

    }
    else{

        $uploadStatus="Registration Failed";
    }

echo"<br>".$uploadStatus;


?>
<?php
include 'connection.php';

$name=$_REQUEST['name'];

$email=$_REQUEST['email'];
$Type=$_POST['Type'];
$phoneNumber=$_POST['PhoneNumber'];

$Why=$_POST['why'];


  $btn=$_POST['Volunteer'];
  echo "$btn";


//echo" $fileName";
//echo" $targetPath";

if(isset($_POST['Volunteer']))
{
    $insertUserQuery="INSERT INTO volunteer(name,Email,TypeOfWork,PhoneNumber,Why) values ('".$name."','".$email."','".$Type."','".$phoneNumber."','".$Why."')";
        //$insertUserQuery="INSERT INTO sponsor(SName,User Name,Password,Email,Phone No,Gender) values ('".$name."','".$un."','".$email."','".$password."','".$email."','".$phoneNumber."','".$gender."')";
        $result=mysqli_query($conn,$insertUserQuery);
        $uploadStatus="Donation  Successfully";
        header('location:index.html');

    }
    else{

        $uploadStatus="Donation Failed";
    }

echo"<br>".$uploadStatus;


?>
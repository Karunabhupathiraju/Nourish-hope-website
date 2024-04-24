<?php
include 'connection.php';

$name=$_REQUEST['name'];

$email=$_REQUEST['email'];
$amount=$_POST['amount'];
$cardNumber=$_POST['CardNumber'];
$paymentMethod=$_POST['payment'];
$Year=$_POST['Year'];
$CVV=$_POST['CVV'];

  $btn=$_POST['Donate'];
  echo "$btn";


//echo" $fileName";
//echo" $targetPath";

if(isset($_POST['Donate']))
{
    $insertUserQuery="INSERT INTO donation(Dname,Amount,Email,PaymentMethod,CardNumber,CVV,Year) values ('".$name."','".$amount."','".$email."','".$paymentMethod."','".$cardNumber."','".$CVV."','".$Year."')";
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
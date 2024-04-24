<?php
include 'connection.php';

$name=$_REQUEST['name'];
$DOB=$_REQUEST['DOB'];
$Address=$_REQUEST['Address'];

$Problems=$_POST['Problems'];
$Country=$_POST['Country'];
if(isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    // Do something with the selected gender option
  }
  $DateReg = date("Y-m-d");
  $btn=$_POST['Register'];
  echo "$btn";

  $targetDir="images/";
  $fileName=basename($_FILES['userImage']['name']);
  $targetPath=$targetDir.$fileName;
//echo" $fileName";
//echo" $targetPath";

if(isset($_POST['Register']) && !empty($_FILES["userImage"]["name"]))
{
    if(move_uploaded_file($_FILES["userImage"]["tmp_name"],$targetPath))
    {
    $insertUserQuery="INSERT INTO child(CName,DoB,Gender,Problem,Address,Country,Image,DateReg) values ('".$name."','".$DOB."','".$gender."','".$Problems."','".$Address."','".$Country."','".$targetPath."','".$DateReg."')";
        //$insertUserQuery="INSERT INTO sponsor(SName,User Name,Password,Email,Phone No,Gender) values ('".$name."','".$un."','".$email."','".$password."','".$email."','".$phoneNumber."','".$gender."')";
        $result=mysqli_query($conn,$insertUserQuery);
        $uploadStatus="Added Successfully";
        header('location:Users.php');

    }

else{

    $uploadStatus="File could not be moved";
}
}
    else{

        $uploadStatus="Registration Failed";
    }


echo"<br>".$uploadStatus;


?>
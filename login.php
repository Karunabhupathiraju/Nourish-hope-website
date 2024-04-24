<?php


include 'connection.php';


$un=$_REQUEST['userName'];
$password=$_REQUEST['Password'];


// Check if login form has been submitted
if (isset($_POST['SponsorLogin']) || isset($_POST['AdminLogin'])  ) {
    echo "first 1 if";
    echo "$un";
    echo "$password";
   

if (isset($_POST['SponsorLogin']))
{
    echo "first if";
    echo "$un";
    echo "$password";

 $query = "SELECT * FROM sponsor WHERE username='$un' AND password='$password'";
  $result = mysqli_query($conn, $query);
  

  if (mysqli_num_rows($result) == 1) {

    $_POST['SId'] = $SId;
   
    header('location: SponsorMain.php');
}
}

if(isset($_POST['AdminLogin']))
{
    echo "second if";
    echo "$un";
    echo "$password";
    $query = "SELECT * FROM admin WHERE username='$un' AND password='$password'";
    $result = mysqli_query($conn, $query);
  
    if (mysqli_num_rows($result) == 1) {
      // User has successfully logged in, create session variables
      
      header('location: ChildReg.html');
}
}
 
  else {
    // Display error message if login fails
    echo "Incorrect username or password";
  }
}



?>
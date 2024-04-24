<?php


include 'connection.php';

$userId=$_GET['id'];
$un=$_REQUEST['userName'];



// Check if login form has been submitted
if (isset($_POST['SponsorLogin']))  {
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

    while($row=mysqli_fetch_assoc($result))
    {
        $query="UPDATE  child SET SId='$un' where CId='$userId'";
   
    header('location: SponsorMain.php');
}
}
}
}

 
    

?>
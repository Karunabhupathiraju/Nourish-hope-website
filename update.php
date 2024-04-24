<?php
include 'connection.php';

$userId=$_GET['id'];

$CName=$_REQUEST['name'];




$Problem=$_REQUEST['Problems'];


$Address=$_REQUEST['Address'];
$Country=$_REQUEST['Country'];
$SId=$_REQUEST['SId'];


 
    
if(isset($_POST["Update"]) )
{

    $query="UPDATE  child SET CName='$CName', Problem='$Problem',Address='$Address', Country='$Country',SId='$SId' where CId='$userId'";
    /*$query="UPDATE  child SET CName='$CName' DoB='$DoB' Problem='$Problem' Address='$Address' Country='$Country' SId='$SId' WHERE CId='$userId'";*/
        $result=mysqli_query($conn,$query);
        header('location:Users.php');
       
   

        

          echo "Data updated successfully.";
}
     
    

    else{
    
echo "Data failed to updat.";
header('location:Users.php');


    }
    ?>





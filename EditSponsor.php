<?php
include 'connection.php';

$userId=$_GET['id'];
$SId=$_GET['SId'];




 
    

    $query="UPDATE  child SET SId='$SId' where CId='$userId'";
    /*$query="UPDATE  child SET CName='$CName' DoB='$DoB' Problem='$Problem' Address='$Address' Country='$Country' SId='$SId' WHERE CId='$userId'";*/
        $result=mysqli_query($conn,$query);
        header('location:Users.php');
       
   

        

          echo "Data updated successfully.";

     
    


    ?>





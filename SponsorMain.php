<?php
include 'connection.php';
?>

<html>
    <head>
        <title>Child List</title>
        <link rel="stylesheet" href="day2style.css">
</head>
<body>

<table>
    <tr>
        <td>CId</td>
        <td>Name</td>
        <td>DoB</td>
        <td>Gender</td>
        <td>Problem</td>
        <td>Address</td>
        <td>Country</td>
        
       
        <td>No Of Days Waiting</td>
        
        
        <td>Image</td>
        
        <td >Commands</td>
     
</tr>
<?php
$getDataQuery="SELECT * FROM child where SId=0";
$result=mysqli_query($conn,$getDataQuery);

if(mysqli_num_rows($result)>0)
{
    
    while($row=mysqli_fetch_assoc($result))
    {
        $date1= $row['DateReg'];
        $date2= date("Y-m-d");
        
        $diff = strtotime($date2) - strtotime($date1);
        $days = floor($diff / (60 * 60 * 24));
        echo "<tr>
        <td>".$row['CId']."</td>
        <td>".$row['CName']."</td>
        <td>".$row['DoB']."</td>
        <td>".$row['Gender']."</td>
        <td>".$row['Problem']."</td>
        <td>".$row['Address']."</td>
        
        
        <td>".$row['Country']."</td>
        <td>".$days."</td>

      <td>
        
       
     
    
        
        <td><img src='".$row['Image']."' width='50' height='50'></td>
        <td><a href='Sponsor3Update.php?id=".$row['CId']."'>Sponsor</a></td>
       
        </tr>";
    }
}

?>

</table>

</body>
</html>
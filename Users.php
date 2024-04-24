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
        
        <td>SId</td>
        <td>Image</td>
        
        <td colspan="2">Commands</td>
     
</tr>
<?php
$getDataQuery="SELECT * FROM child";
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

        <td>".$row['SId']."</td>
        
       
     
    
        
        <td><img src='".$row['Image']."' width='50' height='50'></td>
        <td><a href='edit.php?id=".$row['CId']."'>Edit</a></td>
        <td><a href='delete.php?id=".$row['CId']."'>Delete</a></td>
        </tr>";
    }
}

?>
<tr>
    <td style="text-align: center ; background-color: aqua;" class="design" colspan="14"><button style="  padding: 10px;border: 1px solid #ccc;border-radius: 5px;font-size: 16px;width:90%;text-align: center;align-items: center;"><a href="ChildReg.html" style=" padding: 10px;font-size: 16px;width:90%;text-align: center;align-items: center;">Add A New Child</a></button></td>
  
</tr>
</table>

</body>
</html>
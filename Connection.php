<?php
$dbHost="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="nourishhope";
$conn=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($conn)
{
    echo "Connected to Database";
}
else
{
    echo "Database not connected";
}




?>
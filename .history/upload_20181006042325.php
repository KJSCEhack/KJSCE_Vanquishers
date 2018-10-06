<?php  
$hostname="localhost"; 
$dbname="kjsce_hackathon"; 
$Username="root"; 
$Password="qweasdzxc"; 

$conn = mysqli_connect($hostname,$Username,$Password,$dbname); 
 
if(!$conn) 
{ 
    die("connection failed:" .mysqli_connect_error()); 
 
} 
echo "<h1>Connected Succesfully</h1>"; 
mysqli_close($conn); 
 
?>
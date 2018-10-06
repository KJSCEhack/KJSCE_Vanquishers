<?php  
$hostname="localhost"; 
$dbname="egnitia_localhost"; 
$Username="root"; 
$Password="qweasdzxc"; 
$conn =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","kjsce_hacakthon"); 
//$conn = mysqli_connect($hostname,$Username,$Password,$dbname); 
 
if(!$conn) 
{ 
    die("connection failed:" .mysqli_connect_error()); 
 
} 
echo "<h1>Connected Succesfully</h1>"; 
mysqli_close($conn); 
 
?>
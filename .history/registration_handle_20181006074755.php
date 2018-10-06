<?php  
$hostname="localhost"; 
$dbname="egnitia_localhost"; 
$Username="root"; 
$Password="qweasdzxc"; 
$conn =mysqli_connect("localhost","shravan","","kjsce_hackathon"); 
//$conn = mysqli_connect($hostname,$Username,$Password,$dbname); 
 
if(!$conn) 
{ 
    die("connection failed:" .mysqli_connect_error()); 
 
} 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];



mysqli_close($conn); 
 
?>
<?php  
$hostname="localhost"; 
$dbname="egnitia_localhost"; 
$Username="root"; 
$Password="qweasdzxc"; 
$conn =mysqli_connect("localhost","shravan","","kjsce_hackathon"); 
 
if(!$conn) 
{ 
    die("connection failed:" .mysqli_connect_error()); 
 
} 

$email=$_POST['email'];
$password=$_POST['password'];

$sql="select fname,lname,email,password from login_user where email='$email' and password='$password'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

session_start();
$_SESSION['email'] = $email;
$_SESSION['name']=$fname." ".$lname;

mysqli_close($conn); 

 
?>
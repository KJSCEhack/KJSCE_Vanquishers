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

$sql="insert into login_user(fname,lname,email,password) values($fname,$lname,$email,$password)";

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
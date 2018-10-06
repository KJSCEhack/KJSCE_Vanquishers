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
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)==1) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name']=$fname." ".$lname;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);  
?>
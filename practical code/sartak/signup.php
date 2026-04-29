<?php
$conn=new mysqli("localhost","root","","register");
if($conn->connect_error){
    die ("Connection Failed") .$conn->connect_error;
}
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO signups
(name,email,password)
VALUES
('$name','$email','$password')";
if($conn->query($sql)==TRUE){
    echo "Registration Successfull!";
     }
else{
    echo "Error" .$conn->error;
}    
$conn->close();
?>

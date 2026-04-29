<?php
$conn=mysqli_connect("localhost","root","","register");
if(!$conn){
    die ("Connection Failed") .mysqli_connect_error();
}
$name=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM signups WHERE 
name='$name' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "Login Successfull!";
    exit();
}
else{
    echo "Invalid credentials";
}
mysqli_close($conn);
?>

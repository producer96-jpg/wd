<?php
$conn = mysqli_connect("localhost", "root", "", "practical");

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "Login successful";
} else {
    echo "Invalid name or password";
}
mysqli_close($conn);
?>

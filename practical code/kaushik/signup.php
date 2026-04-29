<?php
{
$conn = mysqli_connect("localhost", "root", "", "producer");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "INSERT INTO user (name, email, password) 
            VALUES ('$name', '$email', '$password')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
 
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "practical");
if (!$conn)
{
    echo "not successful" . mysqli_error();
}
else{
    echo "successful";
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$sql = "INSERT INTO signup( name, email, password, confirm) values('$name', '$email', '$password', '$confirm')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
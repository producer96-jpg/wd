<?php
$conn = mysqli_connect("localhost", "root", "", "producer");

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login Successful";
} else {
    echo "Login unSuccessful";
}

?>]

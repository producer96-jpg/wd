<?php
$conn = mysqli_connect("localhost", "root", "", "practical");

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ;
    $age = $_POST['age'] ;
    $dob = $_POST['dob'];
    $address = $_POST['add'] ;
    $gender = $_POST['gender'] ;
    $email = $_POST['email'] ;
    $branch = $_POST['branch'] ;
    $mobile = $_POST['number'] ;
    $password = $_POST['pass'] ;

    $sql = "INSERT INTO student (name, age, dob, address, gender, email, branch, mobile, password) 
            VALUES ('$name', '$age', '$dob', '$address', '$gender', '$email', '$branch', '$mobile', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
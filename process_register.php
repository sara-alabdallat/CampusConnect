<?php
include 'config.php';

$name = $_POST['name'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO registrations (student_name, student_id, email, event_id)
VALUES ('$name', '$student_id', '$email', '$event_id')";

if(mysqli_query($conn, $sql)){
    echo "Registration Successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
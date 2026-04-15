<?php
include "./db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $class_no = $_POST["class_no"];
    $roll_no = $_POST["roll_no"];

    $stmt = $conn->prepare("INSERT INTO students (full_name, email, class_no, roll_no) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $full_name, $email, $class_no, $roll_no);

    if ($stmt->execute()) {
        header("Location: ../student_list.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
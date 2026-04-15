<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("ডাটাবেজ সংযোগ ব্যর্থ: " . $conn->connect_error);
    }
    
    if (!$conn->set_charset("utf8")) {
        throw new Exception("ক্যারেক্টার সেট লোড করতে ব্যর্থ।");
    }
} catch (Exception $e) {
    die("❌ সিস্টেম ত্রুটি: " . $e->getMessage());
}
?>
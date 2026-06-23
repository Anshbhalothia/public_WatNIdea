<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/database.php';

header('Content-Type: application/json');

// Helper
function clean($data) {
    return htmlspecialchars(trim($data));
}

// Get data
$fname   = clean($_POST['fname'] ?? '');
$lname   = clean($_POST['lname'] ?? '');
$phone   = clean($_POST['phone'] ?? '');
$email   = clean($_POST['email'] ?? '');
$message = clean($_POST['message'] ?? '');

// Validation
if (!$fname || !$email || !$phone) {
    echo json_encode([
        "success" => false,
        "message" => "Please fill all required fields"
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        "success" => false,
        "message" => "Invalid email format"
    ]);
    exit;
}

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    echo json_encode([
        "success" => false,
        "message" => "Phone must be 10 digits"
    ]);
    exit;
}

// Extra info
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Insert into DB
$stmt = $conn->prepare("
    INSERT INTO contacts (fname, lname, phone, email, message, ip_address, user_agent)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param("sssssss", $fname, $lname, $phone, $email, $message, $ip, $userAgent);

if ($stmt->execute()) {
    echo json_encode([
        "success" => true,
        "message" => "Message sent successfully!"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Something went wrong"
    ]);
}
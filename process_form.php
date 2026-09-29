<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php');
    exit;
}

$conn = get_db_connection();

$bride_name = trim($_POST['bride_name'] ?? '');
$groom_name = trim($_POST['groom_name'] ?? '');
$wedding_date = trim($_POST['wedding_date'] ?? '');
$no_of_persons = trim($_POST['no_of_persons'] ?? '');
$mobile_no = trim($_POST['mobile_no'] ?? '');

if ($bride_name === '' || $groom_name === '' || $wedding_date === '' || $no_of_persons === '' || $mobile_no === '') {
    $_SESSION['form_error'] = 'Please fill in all fields.';
    header('Location: /index.php');
    exit;
}

$stmt = $conn->prepare("INSERT INTO enquiries (bride_name, groom_name, wedding_date, no_of_persons, mobile_no) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('sssis', $bride_name, $groom_name, $wedding_date, $no_of_persons, $mobile_no);

if ($stmt->execute()) {
    $_SESSION['form_success'] = 'Your enquiry has been sent successfully. Our team will contact you soon.';
} else {
    $_SESSION['form_error'] = 'There was an issue sending your enquiry. Please try again.';
}

$stmt->close();
$conn->close();

header('Location: /index.php');
exit;

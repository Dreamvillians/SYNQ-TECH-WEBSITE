<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['user'];
  $stmt = $conn->prepare("SELECT * FROM links WHERE email2 = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $data = $result->fetch_assoc();

  if ($data) {
    unset($data['id']);
    unset($data['created_at']);
    echo json_encode($data);
    exit();
  } else {
    echo "Invalid email or password!";
  }

  $stmt->close();
}

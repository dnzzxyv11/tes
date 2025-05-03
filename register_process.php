<?php
$data = json_decode(file_get_contents("users.json"), true);
$data[] = [
  "username" => $_POST['username'],
  "password" => $_POST['password']
];
file_put_contents("users.json", json_encode($data, JSON_PRETTY_PRINT));
header("Location: index.php");
?>
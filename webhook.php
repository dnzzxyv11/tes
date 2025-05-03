<?php
include 'config.php';

$update = json_decode(file_get_contents("php://input"), true);
file_put_contents("messages.json", json_encode($update, JSON_PRETTY_PRINT), FILE_APPEND);
?>
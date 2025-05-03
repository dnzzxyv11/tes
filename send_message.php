<?php
session_start();
include 'config.php';

$username = $_SESSION['username'];
$message = $_POST['message'];
$text = "$username: $message";

$url = "https://api.telegram.org/bot$botToken/sendMessage";
file_get_contents($url."?chat_id=$ownerChatId&text=".urlencode($text));

header("Location: chat.php");
?>
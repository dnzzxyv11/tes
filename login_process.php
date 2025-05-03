<?php
session_start();
$data = json_decode(file_get_contents("users.json"), true);

foreach($data as $user){
  if($user['username'] == $_POST['username'] && $user['password'] == $_POST['password']){
    $_SESSION['username'] = $user['username'];
    header("Location: chat.php");
    exit();
  }
}
header("Location: index.php");
?>
<?php
// Start the session
session_start();

$userName = $_POST["username"];
$passWord = $_POST["password"];

if ($userName == "admin" && $passWord =='pass1234'){
    $_SESSION["userName"] = $userName;
    redirect('home.php?');
}else{
    echo 'No Ok';
}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>





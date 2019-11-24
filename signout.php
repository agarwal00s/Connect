<?php 
session_start();
session_destroy();
setcookie("login","Signing Out",time()-(86400*30));
header('Location: ./');
?>

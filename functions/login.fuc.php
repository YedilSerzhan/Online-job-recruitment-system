<?php

if(isset($_POST['signIn'])){
    session_start();
    $_SESSION["role"] = "user";
    header("Location:../index.php");
}

?>
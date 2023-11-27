<?php
    session_start();
    $usario = $_SESSION['usuario'];
    if(!isset($_SESSION['usuario'])){
        header('location:index.php?erro_login=true');
        exit;
    }
?>
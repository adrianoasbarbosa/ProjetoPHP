<?php

(!isset($_SESSION) ? session_start() : "");

if ($_SESSION['acesso'] != 'b8d66a4634503dcf530ce1b3704ca5dfae3d34bb') {
    header('location:logout.php');
}

if (isset($_SESSION['start_login']) && (time() - $_SESSION['start_login'] > 3000)) {
    header("location:logout.php");
}

$_SESSION['start_login'] = time();

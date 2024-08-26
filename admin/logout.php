<?php

(!isset($_SESSION) ? session_start() : "");
$_SESSION = array();
session_destroy();
header('location:../admin/auth/login.php');

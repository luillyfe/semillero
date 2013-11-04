<?php
session_start();
unset($_SESSION["user"], $_SESSION["password"], $_SESSION["id"], $_SESSION['autor']);
$_SESSION = array();
session_destroy();
header("Location: /semillero/semillero/");
<?php

session_start();

unset($_SESSION['user_name']);
unset($_SESSION["autorizacao"]);


session_unset();
session_destroy();

header("Location: index.php");
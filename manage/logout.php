<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
session_start();
session_unset();
session_destroy();
header('Location: ' . core::rootpath() . '/manage');
exit;
?>
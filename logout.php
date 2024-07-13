<?php
session_start();
unset($_SESSION['YAK']);
$url = 'login';
header('Location: ' . $url);
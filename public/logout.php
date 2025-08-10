<?php
require_once __DIR__ . '/../src/auth.php';
logout();
header('Location: /dsir/public/login.php');
exit;


<?php

$user = 'root';
$pass = '';
$db = 'pwfu_db';

$db = new mysqli('localhost', $user, $pass, $db) or die("Connection failed");

echo"Connection Succeeded";

?>
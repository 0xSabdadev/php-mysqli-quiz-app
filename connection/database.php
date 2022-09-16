<?php

$db_host = 'localhost';
$db_name = 'quiz-kel-6';
$db_user = 'root';
$db_pass = '';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect MYSQL".mysqli_connect_errno();
}

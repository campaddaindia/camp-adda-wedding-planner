<?php
function get_db_connection() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'jimcorbett_weddings';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        throw new RuntimeException('Database connection failed: ' . $conn->connect_error);
    }

    $conn->set_charset('utf8mb4');
    return $conn;
}

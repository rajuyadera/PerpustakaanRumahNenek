<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "db_perpus";
    $username = "root";
    $password = "";

    // Buat Object dari class PDO

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

}
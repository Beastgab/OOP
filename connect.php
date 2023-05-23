<?php
    $host = '127.0.0.1';
    $db   = 'vinylshop';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn  = "myscl:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTER_ERRMODE            => PDO::ETCH_ASSOC,
        PDO::ATTER_DEFAULT_FETCH_MODE => PDO::FERRMODE_EXCEPTION,
        PDO::ATTER_EMULATE_PREPARES   => FALSE,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } Catch (\PDOExcepton $e) {
        throw new PDOException ($e->getMessage(), (int)$e->getcode());
    }
    echo $pdo->query('select version()');
?>    
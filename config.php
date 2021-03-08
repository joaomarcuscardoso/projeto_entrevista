<?php
require 'environment.php';
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
$config = array();
if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/projeto_entrevista/");
    $config['dbname'] = 'projeto';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://www.projeto_entrevista.com/");
    $config['dbname'] = 'projeto';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}

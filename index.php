<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo "Hello World!   "; 
echo getenv('DB_HOST');
echo $_ENV['DB_HOST'];

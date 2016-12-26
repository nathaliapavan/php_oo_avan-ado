<?php

require_once 'IConn.php';
require_once 'Conn.php';
require_once 'Product.php';

// criando objeto
$db = new Conn('mysql:host=127.0.0.1;dbname=testedb', 'root', 'root');

$product = new Product($db);
$list = $product->lista();

echo "<pre>";
var_dump($list);
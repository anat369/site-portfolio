<?php
$host = ' ';
  $database = '';
  $user = '';
  $pass = '';

  $dsn = "mysql:host=$host;dbname=$database;";
  $options = array(
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  );
  $pdo = new PDO($dsn, $user, $pass, $options);

  function product() {
  global $pdo;
  $stmt = $pdo->query('SELECT * FROM product');
  $data = $stmt->fetchAll();
  return $data;
  }

  function site() {
  global $pdo;
  $stmt = $pdo->query('SELECT * FROM site');
  $data = $stmt->fetchAll();
  return $data;
  }
 
$data1 = product();
 

$data2 = site();
  


 ?>
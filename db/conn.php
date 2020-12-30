<?php
   //development processs
   // $host = '127.0.0.1';
   // $db = 'livingOut-reg-form';
   // $user = 'root';
   // $password = '';
   // $charset = 'utf8mb4';

   //remote database connection.
   $host = 'remotemysql.com';
   $db = 'aoJMnMrr6d';
   $user = 'aoJMnMrr6d';
   $password = 'gYZovMaLJt';
   $charset = 'utf8mb4';

   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

   try{
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     
   }catch(PDOExeption $e) {
        throw new PDOException($e->getMessage());
       
   }
   
   require_once 'crud.php';
   $crud = new crud($pdo);
?>
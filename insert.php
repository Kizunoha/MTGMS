<?php
require_once __DIR__ . '/vendor/autoload.php';
   // connect to mongodb
   $m = new MongoDB\Client();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->MTGS;
   echo "Database mydb selected";
   $collection = $db->reservation;
   echo "Collection selected succsessfully";
	
   $InsertOneResult = $collection -> insertOne(
    ['name' => 'Ethan', 'age' => '28', 'skill' => 'php' ]
   );
	
   print("inserted %d documents". $InsertOneResult->getInsertedCount());
   var_dump($InsertOneResult->getInsertedId());
   echo "Document inserted successfully";
?>
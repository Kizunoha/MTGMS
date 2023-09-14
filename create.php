<?php
require_once __DIR__ . '/vendor/autoload.php';
   // connect to mongodb
   $m = new MongoDB\Client();
	echo "Connection to database successfully";
	
   // select a database
   $db = $m->MTGS;
   echo "Database mydb selected";
   $collection = $db->createCollection("reservation");
   echo "Collection created succsessfully";
?>
<?php
   // connect to mongodb
   $m = new MongoClient();
   //<p style="color:sienna;margin-left:20px;">This is a paragraph.</p>;
   /*echo "Connection to database successfully <br>";*/
   // select a database
   $db = $m->do_an_2;
   //echo "Database PHP selected<br>";
   $collection = $db->chuyen_nghanh;
   $data = $collection->find()->sort(array('ten_chuyen_nghanh' => 1));
   ?>
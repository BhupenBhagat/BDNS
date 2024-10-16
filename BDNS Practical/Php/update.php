<?php
    $m=new MongoClient();
    echo "Connection to database successfully";
    $db=$m->MYDB249613;
    echo "\n Database selected successfully";
    $col=$db->MyCol;
    echo "\nCollection selected successfully";
    $col->update(array("name"=>"Bhupen"),array('$set'=>array("age"=>19)));
    echo "\nData updated successfully";
?>
<?php
    $m=new MongoClient();
    echo "Connection to database successfully";
    $db=$m->MYDB249613;
    echo "\n Database selected successfully";
    $col=$db->MyCol;
    echo "\nCollection selected successfully";

    $col->remove(array("name"=>"Bhupen"));
    echo "\nDocument removed successfully";
?>
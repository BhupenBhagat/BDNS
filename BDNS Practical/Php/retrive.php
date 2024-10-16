<?php
    $m=new MongoClient();
    echo "Connection to database successfully";
    $db=$m->MYDB249613;
    echo "\n Database selected successfully";
    $col=$db->MyCol;
    echo "\nCollection selected successfully";
    $cursor=$col->find();
    foreach($cursor as $doc)
    {
        echo "<br/>";
        echo $doc["name"]."<br/>";
        echo $doc["age"]."<br/>";
    }
?>
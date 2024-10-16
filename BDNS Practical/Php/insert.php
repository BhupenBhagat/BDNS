<?php
	$m = new MongoClient();
	echo "Connection to DB successfully";
	$db = $m -> MYDB249613;
	echo "\n DB Selected successfully";
	$Col = $db->MyCol;
	echo "\n Collection selected successfully";
	$doc = array(
		"name" =>"Bhupen",
		"age" =>20,
		"dept"=>"TYIT",
		"rollno"=>249613
	);
	$Col->insert($doc);
	echo"\n Document inserted successfully";
?>
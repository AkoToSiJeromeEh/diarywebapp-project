<?php


 	// Connect
	$TwoHeartsMemoirDB_Host = 'localhost';
	$TwoHeartsMemoirDB_User = 'root';
	$TwoHeartsMemoirDB_Pass = '';
	$TwoHeartsMemoirDB_Name = 'twoheartsmemoir';

	$createConnection = mysqli_connect($TwoHeartsMemoirDB_Host, $TwoHeartsMemoirDB_User, $TwoHeartsMemoirDB_Pass, $TwoHeartsMemoirDB_Name);


	if(!$createConnection) {

		 // optional echo "Connected to database : ".$dbName;
		die("Databse connection failed failed mayyydayy. Please");
	}
?>
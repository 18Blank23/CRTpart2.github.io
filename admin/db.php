<?php
$conn = mysql_connect('remotesql.com', 'cix3dqBVsU', 'nn8hdgwJTx');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("chatapp", $conn);
	


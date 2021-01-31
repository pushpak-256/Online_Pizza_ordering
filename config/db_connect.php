<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'push', 'ok', 'gopizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
<?php
	$config = [
		'DATABASE_HOST' => 's1.mattiaeffendi.me',
		'DATABASE_NAME' => 'niccolo_salvi',
		'DATABASE_USER' => 'niccolo_salvi',
		'DATABASE_PASSWORD' => '192WR157UB'
	];
	
	$mysql = new mysqli($config["DATABASE_HOST"], $config["DATABASE_USER"], $config["DATABASE_PASSWORD"], $config["DATABASE_NAME"]);

	if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
	}
?>

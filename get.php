<?php
	require("config.php");
    
    $sql = "SELECT * FROM posizione";
    if ($stmt = $mysql->prepare($sql)) {
    	$stmt->execute();

      	$result = $stmt->get_result();
      	if ($result->num_rows > 0) {
        	while ($row = $result->fetch_assoc()) {
            	print_r($row);
        	}
      	}
    }
    
    $mysql->close();
?>

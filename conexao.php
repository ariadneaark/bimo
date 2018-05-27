<?php
		$conn = new PDO('mysql:host=localhost;dbname=db_bimo','root','');
		$conn->exec("SET CHARACTER SET utf8");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
?>
<?php
	require 'db_connect.php';

	$sql = "SELECT placeholder FROM about_us WHERE id = 1";

	$text = mysqli_query($conn,$sql);

	echo mysqli_fetch_array($text)[0];

?>
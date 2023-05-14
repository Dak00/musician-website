<?php
	require "db_connect.php";

	$audio_url = $_SESSION['audio_url'];
	$audio_path = 'src/temp_audio/'.$audio_url;

	if(isset($_POST['delete'])){
		unlink($audio_path);

		header("Location: index.php");
	}
	else{
		header("Location: index.php");
	}

?>
<?php
if (isset($_POST['confirm'])) 
{
	require 'db_connect.php';


// moving files from temp_audio to uploads
    
    $new_audio_name = $_SESSION['audio_url'];
    $username = $_SESSION['user'];
    $audio_name = $_SESSION['audio_name'];
    
	$audio_temp_path = 'src/temp_audio/'.$new_audio_name;
    $audio_upload_path = 'src/uploads/'.$new_audio_name;

    rename($audio_temp_path, $audio_upload_path);

// inserting data to database

    $sql = "INSERT INTO audios(audio_url) VALUES('$new_audio_name')";
    mysqli_query($conn,$sql);

    $sql = "UPDATE audios SET user_nick = '$username' WHERE audio_url = '$new_audio_name' ";
    mysqli_query($conn,$sql);

    $sql = "UPDATE audios SET audio_name = '$audio_name' WHERE audio_url = '$new_audio_name' ";
    mysqli_query($conn,$sql);

// bot sends message to telegram group    
    require "bot_config.php";

    
    $sql = "DELETE FROM audios WHERE audio_url = '$new_audio_name' ";
    mysqli_query($conn,$sql);    

// clearing a temp_audio path if there will be more than 5 files

    $temp_path = 'src/temp_audio';

    $fi = new FilesystemIterator($temp_path, FilesystemIterator::SKIP_DOTS);
    $x = iterator_count($fi);

    if($x > 5 ){
        $files = glob($temp_path.'/*'); 
        foreach($files as $file){ 
          if(is_file($file)) {
            unlink($file); 
          }
        }
    }

    header("Location:index.php");

}
else{
    header("Location:index.php");
}



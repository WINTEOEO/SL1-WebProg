<?php

    session_start();

    $nama_file = $_FILES['berkas']['name'];
    $tmp_name = $_FILES['berkas']['tmp_name'];
    
    $allowed_ext = array("jpg", "jpeg", "png");
    $extension = explode(".", $_FILES['berkas']['name']); 
    $accepted = true; 

    if((($_FILES['berkas']['type'] == "image/jpg") || ($_FILES['berkas']['type'] == "image/jpeg") || ($_FILES['berkas']['type'] == "image/png")) && in_array($extension, $allowed_ext)) {
        $dirUpload = "terupload/";
        $terupload = move_uploaded_file($tmp_name, $dirUpload.$nama_file);
        // header('Location: Register.php');
        // exit();

        // echo "File berhadil diupload";
        // echo "<a href='".$dirUpload.$namaFile."'>".$namaFile."</a?";
    } else {
        $accepted = false;
        $_SESSION['file-accepted'] = $accepted;
    }
?>
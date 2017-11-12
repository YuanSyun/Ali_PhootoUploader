<?php

if(!isset($_FILES['myFile'])){
    echo "Please upload a photo.";
}

if(!isset( $_POST['aliID'])){
    echo "Please select ali id.";
}

if (isset($_FILES['myFile']) && isset($_POST['aliID'])) {

    $aliID = $_POST['aliID'];
    move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/Ali_".$aliID.".jpg");
    
    echo 'successful';
}

?>
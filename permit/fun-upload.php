<!--this code written by supun lakshitha  -->

<?php
include 'fun-db.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $path = '../uploads/';
    $catagery = $_POST['catagery'];
    $filename = $file['name'];
    $filetmpname = $file['tmp_name'];
    $fileerror = $file['error'];
    $filetype = $file['type'];

    $nameparts = explode('.', $filename);
    $fileext = strtolower(end($nameparts));

    if ($fileext == 'jpg') {

        if ($fileerror == 0) {
            $uniqueid = uniqid('', );
            $imagename = $uniqueid .'.'. $fileext; //crete the name of image file
            move_uploaded_file($filetmpname, $path . $imagename); // upload the img to destination -> file path + image name
            galinsert($uniqueid, $catagery);
            header("Location: http://localhost/photgrapher-website/permit/gal-add.php?done=true");
            exit;


        } else {
            echo "There was an error uploading your file !!!";
        }

    } else {
        header("Location: http://localhost/photgrapher-website/permit/gal-add.php?done=false");
    }
}
?>
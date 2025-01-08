<?php
include 'fun-db.php';
$path = '../uploads/';
$data = json_decode(file_get_contents('php://input'), true);
$imageId = $data['id'];

//delte from file system
$data = galselect($imageId);
$img = $data['image'];
unlink($img);

// Perform the image deletion from the database and server
galdelete($imageId);

// Assume the deletion was successful
$response = ['success' => true];

// Send the response back to the client
header('Content-Type: application/json');
echo json_encode($response);

?>
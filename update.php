<?php
include "conn.php";

$id = $_POST['id'];
$name = $_POST['name'];
$phno = $_POST['phno'];
$email = $_POST['email'];

$query = "UPDATE contacts SET 
          name = '$name',
          phno = '$phno',
          email = '$email'
          WHERE id = '$id'";

$result = mysqli_query($conn, $query);

$response = array();

if ($result) {
    $response['status'] = 1;
    $response['msg'] = "Successfully updated";
}
else {
    $response['status'] = 0;
    $response['msg'] = "Failed to update";
}

echo json_encode($response);

?>
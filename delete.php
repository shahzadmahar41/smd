<?php
include "conn.php";

$id = $_POST['id'];

$query = "DELETE FROM contacts WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "i", $id);

$result = mysqli_stmt_execute($stmt);

$response = array();

if ($result) {
    $response['status'] = 1;
    $response['msg'] = "Successfully deleted";
} else {
    $response['status'] = 0;
    $response['msg'] = "Failed to delete";
}

echo json_encode($response);
?>
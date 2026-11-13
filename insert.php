<?php
include 'conn.php';
$name=$_POST['name'];
$phno=$_POST['phno'];
$email=$_POST['email'];

$res = array();

if(isset($_POST['name'],$_POST['phno'],$_POST['email'])){

    $query="INSERT INTO `contacts`(`name`, `phno`, `email`)
    VALUES ('$name','$phno','$email')";
    if(mysqli_query($conn,$query))
    {
        $res['status']=1;
        $res['id']=mysqli_insert_id($conn);
        $res['msg']="Successfully Inserted";
    }
    else
    {
        $res['status']=0;
        $res['msg']="Failed to Insert";
    }
}
else{
    $res['msg']="Data Incomplete";
}
echo json_encode($res);

?>
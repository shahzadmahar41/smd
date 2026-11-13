<?php

include 'conn.php';
$query="SELECT * FROM `contacts` ORDER BY `contacts`.`id` ASC";
$result=mysqli_query($conn,$query);
$response=array();
if($result)
    {
        $response['contacts']=array();
        while($row=mysqli_fetch_array($result))
        {
            $data=array();
            $data['id']=$row['id'];
            $data['name']=$row['name'];
            $data['phno']=$row['phno'];
            $data['email']=$row['email'];
            array_push($response['contacts'],$data);
        }
    }
else
    {
        $response['msg']="No Data Found";
    }
echo json_encode($response);        


?>
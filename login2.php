<?php
header("Access-Control-Allow-Origin:http://10.30.29.100:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type,xfilecategory,xfilename,xfilesize");

$data = file_get_contents("php://input");
$data=json_decode($data);

$message=array('message'=>"success");

if($data->userName==123&&$data->passWord==123){
    session_abort();
    echo json_encode($message);
}else{
    $message['message']='error';
    echo json_encode($message);
}
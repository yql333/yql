<?php
//php处理跨域的接口
header('Access-Control-Allow-Origin:*');
include("conn.php");

$uPwd = $_GET["uPwd"];
$uName = $_GET["uName"];

$token = base64_encode(time());

// $arr = array("uName"=>$uName,"uPwd"=>$uPwd);

$sql = "insert into users(uName,uPwd,token) values('{$uName}','{$uPwd}','{$token}')";
if(mysql_query($sql)){
    $arr=array('msg'=>"ok","token"=>token); 
	echo json_encode($arr);
}else{
    $arr=array('msg'=>"no"); 
	echo json_encode($arr);
}




?>
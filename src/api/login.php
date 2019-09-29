<?php
header('Access-Control-Allow-Origin:*');
include("conn.php");

$uPwd = $_GET["uPwd"];
$uName = $_GET["uName"];


$sql="select * from users where uName='{$uName}'";
$result=mysql_query($sql);
$rs=mysql_Fetch_assoc($result);

if($token==$rs["token"])
{

}
else
{

}
$num=mysql_num_rows($result);
if($num>0){
    if($uPwd==$rs["uPwd"]){
        // localStorage["uName"]=$uName;
        // localStorage["id"]=$rs["id"];
        $arr = array("msg"=>"loginOK");
        echo json_encode($arr);
    }
    else
    {
        $arr=array("msg"=>"pwd no");
        echo json_encode($arr);
    }
}
else
{
    $arr=array("msg"=>"no");
    echo json_encode($arr);
}

?>

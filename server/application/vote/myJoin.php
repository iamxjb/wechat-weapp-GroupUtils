<?php
header('Content-Type: application/json');
$conn=mysqli_connect('localhost','root','','tongxuequn');
mysqli_set_charset($conn,'utf8');
$openid=$_REQUEST['openid'];

$sql = "select * from vote_user left join vote_task on vote_user.voteid=vote_task.voteid where userid='$openid'";
$result=mysqli_query($conn,$sql);
if($result){
	$tasklist=mysqli_fetch_all($result,MYSQLI_ASSOC);
}else{
	$tasklist=array();
}
echo json_encode($tasklist); 
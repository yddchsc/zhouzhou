<?php
$name = $_REQUEST["name"];
$password = $_REQUEST["password"];
$password2 = $_REQUEST["password2"];
$sex = $_REQUEST["sex"];
$school = $_REQUEST["school"];
$age = $_REQUEST["age"];

if(""==$name){
	echo "用户名不能为空！";
	echo "<a href=javascript:history.back(1)>返回</a>";
	exit;
}
if(""==$password){
	echo "密码不能为空！";
	echo "<a href=javascript:history.back(1)>返回</a>";
	exit;
}
if($password!=$password2){
	echo "密码确认有误！";
	echo "<a href=javascript:history.back(1)>返回</a>";
	exit;
}
$dbname = 'vdxxYAcxvlZAZNycflys';
$host = 'sqld.duapp.com';
$port = 4050;
$user = '7a2f0aa875c94306b77ef58cd43fa88d';//用户AK
$pwd = 'e4fdd5b5aef74b608462f1b8706e5a7d';//用户SK

$conn = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$conn) {
	die("Connect Server Failed: " . mysql_error());
}
	/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$conn)) {
	die("Select Database Failed: " . mysql_error($conn));
}

$result = mysql_query("insert into user(name,password,delflag,createdate,sex,school,age) values('$name','$password','0',now(),'$sex','$school','$age')",$conn);
mysql_close($conn);
header("Location: login.php");
?>
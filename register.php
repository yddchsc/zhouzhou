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

$conn = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conn,"user");
$result = mysqli_query($conn,"insert into user(name,password,delflag,createdate,sex,school,age) values('$name','$password','0',now(),'$sex','$school','$age')");
mysqli_close($conn);
echo "注册成功！";
echo "<a href=login.php>登录</a>";
?>
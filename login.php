<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>登录</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<script src="http://cdn.gbtags.com/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
	<div class="navbar navbar-inverse" role="navigation" style="padding:0;margin:0">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">粥粥</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">粥粥</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="picture.php">相册</a></li>
					<li><a href="video.php">视频</a></li>
					<li><a href="contact.php">联系作者</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<div class="input-append" style="padding:10px;">
							<form method="get" action="search.php"> 
  								<input class="span2" id="appendedInputButton" type="text" name="video">
  								<button class="btn" type="submit" style="background-color:#155ebe;color:#ffffff">Go!</button>
  							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-page">
		<div class="login-form">
			<div class="login-content">
				<div class="form-login-error">
					<h3>Invalid login</h3>
					<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
				</div>
				<form method="post" role="form" id="form_login" action="login.php">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input type="text" class="form-control" name="name" id="username" placeholder="Username" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-key"></i>
							</div>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="fa fa-sign-in"></i>
							Login In
						</button>
					</div>
					<!-- Implemented in v1.1.4 -->				<div class="form-group">
					<em>- or -</em>
					<div class="form-group">
						<button type="button" class="btn btn-default btn-lg btn-block facebook-button">
							&#160;&#160;
							<i class="fa fa-facebook"></i>
							<a href="register.html" style="text-decoration:none;color:#ffffff">|  click here to register</a>
						</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
<?php
if($_POST){
	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];
	$conn = mysqli_connect("127.0.0.1","root","");
	mysqli_select_db($conn,"user");
	$result = mysqli_query($conn,"select * from user where name='$name' and  password='$password'");
	$array = [];
	while($row = mysqli_fetch_row($result)){
		$array[]=$row;
	}
	mysqli_free_result($result);
	if(count($array)){
		setcookie("username", $name);
		setcookie("password", $password);
		header("Location: picture.php");
		echo $name;
		echo "，欢迎回来";
	}
	else{
		echo "用户名或密码不正确！";
	}
}
?>
</body>
</html>
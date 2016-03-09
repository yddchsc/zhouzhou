<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>粥粥的视频</title>
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<script src="http://cdn.gbtags.com/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="navbar navbar-inverse" role="navigation" style="padding:0;margin:0;">
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
	<div class="list-group">
		<a href="#" class="list-group-item active">
			<h4 class="list-group-item-heading">
				粥粥的视频
			</h4>
		</a>
	<?php
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

/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//创建一个数据库表
		/*mysql_query("SET NAMES 'UTF8'"); 
 		mysql_query("SET CHARACTER SET UTF8"); 
 		mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");*/
 		if(!isset($_COOKIE['username'])){
 			header("Location: login.php");
 		}
 		else{
 			$username=$_COOKIE['username'];
 			$password=$_COOKIE['password'];
 			$result=mysql_query("SELECT * FROM user WHERE name='$username' AND password='$password'",$conn);
 			$i=0;
 			while ($row=mysql_fetch_object($result))
 				$i=$i+1;
			if ($i==0)
				header("Location: login.php");
		}
		$video=$_GET["video"];
		$video=preg_replace("/</", "", $video);
		$video=preg_replace("/>/", "", $video);
		$video=preg_replace("/\"/", "", $video);
		$video=preg_replace("/'/", "", $video);
		echo "<script type=\"text/javascript\">
				var h=document.getElementsByTagName(\"h4\");
				h[0].innerHTML=\" &quot; $video &quot; 的搜索结果\";
			</script>";
		if($video=="")
			$result=mysql_query("SELECT * FROM videos",$conn) or die("Cant Perform Query");
		else{
			$result=mysql_query("SELECT * FROM videos WHERE name like '%$video%'",$conn) or die("Cant Perform Query");  
		}
		while ($row=mysql_fetch_object($result)) {   
		echo "
		<a href=\"$row->src\" class=\"list-group-item\">
			<h4 class=\"list-group-item-heading\" style=\"overflow:hidden\">
				$row->name
			</h4>
			<p class=\"list-group-item-text\" style=\"overflow:hidden\">
				视频源地址：$row->presrc
			</p>
		</a>";
		}
		?>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>粥粥的视频</title>
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<script src="http://cdn.gbtags.com/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="navbar navbar-inverse" role="navigation" style="margin:0;padding:0;">
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
					<li class="active"><a href="index.php">相册</a></li>
					<li><a href="video.php">视频</a></li>
					<li><a href="#">联系我们</a></li>
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
		/*填入数据库连接信息*/
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

		$result=mysql_query("SELECT * FROM videos",$conn) or die("Cant Perform Query");   
		while ($row=mysql_fetch_object($result)) {   
		echo "
		<a href=\"$row->src\" class=\"list-group-item\">
			<h4 class=\"list-group-item-heading\">
				$row->name
			</h4>
			<p class=\"list-group-item-text\">
				$row->src
			</p>
		</a>";
		}
		?>
	</div>
</body>
</html>
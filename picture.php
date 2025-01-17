<?php 
session_start(); 
?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>粥粥</title>
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<script src="http://cdn.gbtags.com/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!--<link rel="stylesheet" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://libs.useso.com/js/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="http://libs.useso.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" type="text/css" href="css/gallerybox.css">
	<style type="text/css">
		body{
			background-color:#b8b8b8;
		}
		#gallery-wrapper {
			position: relative;
			max-width: 75%;
			width: 75%;
			margin:50px auto;
		}
		img.gallerybox {
			width: 100%;
			max-width: 100%;
			height: auto;
		}
		.white-panel {
			position: absolute;
			background: white;
			border-radius: 5px;
			box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
			padding: 10px;
		}
		.white-panel h1 {
			font-size: 1em;
		}
		.white-panel h1 a {
			color: #A92733;
		}
		.white-panel:hover {
			box-shadow: 1px 1px 10px rgba(0,0,0,0.5);
			margin-top: -5px;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
		}
	</style>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<div class="navbar navbar-inverse" role="navigation">
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
	<div class="container">
		<div class="jumbotron">
			<h1>欢迎来到粥粥的资源库</h1>
			<p>此网站是作者为收集粥粥的照片与视频而建立的，也欢迎白粥来交流和分享，如有疑问，可以点击下面的按钮 ~(@^_^@)~ </p>
			<p><a href="contact.php" class="btn btn-primary btn-lg" role="button">
				联系作者</a>
			</p>
		</div>
	</div>
	<section id="gallery-wrapper" class="wrapper">
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><img src="img/1.png" class="thumbnail gallerybox"></article>
		<article class="white-panel"><form action="picture.php" method="post"><button type="submit" class="btn btn-info btn-block" style="margin:90px 0 90px 0;background-color:#155ebe;" id="btn">下一页</button><input type="hidden" id="page" name="page" value="0"/></form></article>
	</section>
	
	<script src="js/pinterest_grid.js"></script>
	<script src="js/jquery.gallerybox.js"></script>
	<script type="text/javascript">
		//瀑布流插件
		$(function(){
			$("#gallery-wrapper").pinterest_grid({
				no_columns: 4,
				padding_x: 10,
				padding_y: 10,
				margin_bottom: 50,
				single_column_breakpoint: 700
			});
			
		});
	</script>
	<script type="text/javascript">
		//图片画廊插件
		$(function(){
			$(".gallerybox").gallerybox({
				bgColor:"#b9acac",
				bgOpacity:0.85
			});
		});
	</script>
	<?php
	if(!isset($page))
		$page=0;
	if($_POST){
		$page=$_POST["page"]+1;
		echo "<script type=\"text/javascript\">
			var page = document.getElementById(\"page\");
			page.setAttribute(\"value\",\"".$page."\");
			</script>";
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

		/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//创建一个数据库表
		$qid = mysql_query("select count(*) as total from images",$conn);
		$res = mysql_fetch_array($qid);
		$num = $res['total'];
		
		$m=$page*21+21;
		$a=$page*21;

		if ($m >= $num){
			$m=$num;
			echo "<script type=\"text/javascript\">
			var page = document.getElementById(\"page\");
			page.setAttribute(\"value\",\"-1\");
			</script>";
		}
		
		$result=mysql_query("SELECT * FROM images LIMIT $a,$m",$conn);
		
		echo "<script type=\"text/javascript\">
		var images = document.getElementsByTagName(\"img\");";
		$i=0;
		while ($row=mysql_fetch_object($result)){
			$result1 = mysql_query("select * from images where id=$row->id",$conn) or die("Cant perform Query");  
			$row1=mysql_fetch_object($result1);
			echo "images[$i].setAttribute(\"src\",\"$row1->src\");";
			$i=$i+1;
			if($i==21)
				break;
		}
		echo "
	</script>";
	?>
</body>
</html>
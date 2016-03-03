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
					<li class="active"><a href="#">相册</a></li>
					<li><a href="#">视频</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</div>
		</div>
	</div>
		<section id="gallery-wrapper" class="wrapper">
			<article class="white-panel"><img src="img/1.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/2.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/3.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/4.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/5.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/6.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/7.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/8.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/9.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/10.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/11.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/12.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/13.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/14.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/15.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/16.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/17.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/18.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/19.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/20.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><img src="img/21.jpg" class="thumbnail gallerybox"></article>
			<article class="white-panel"><form action="index.php" method="get"><button type="submit" class="btn btn-info btn-block" style="margin:90px 0 90px 0" id="btn">下一页</button></form></article>
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
		if(!$_SESSION['page'])
			$_SESSION['page']=0;
		$dbname = 'vdxxYAcxvlZAZNycflys';
		/*填入数据库连接信息*/
		$host = 'sqld.duapp.com';
		$port = 4050;
		$user = '7a2f0aa875c94306b77ef58cd43fa88d';//用户AK
		$pwd = 'e4fdd5b5aef74b608462f1b8706e5a7d';//用户SK
		$conn = mysqli_connect("{$host}:{$port}",$user,$pwd);
		mysqli_select_db($conn,$dbname); //mysql_select_db("")指定mysql使用的数据库

		$qid = mysqli_query($conn,"select count(*) as total from images");
		$res = mysqli_fetch_array($qid);
		$num = $res['total'];
		
		$m=$_SESSION['page']*21+21;
		$a=$_SESSION['page']*21;
		if ($m>=$num){
			$m=$num;
			$_SESSION['page']=-1;
		}
		
		$result=mysqli_query($conn,"SELECT * FROM images LIMIT $a,$m");
		echo $_SESSION['page'];
		echo "<script type=\"text/javascript\">
    		var images = document.getElementsByTagName(\"img\");";
    		$i=0;
    		while ($row=mysqli_fetch_object($result)){
    			$result1 = mysqli_query($conn,"select * from images where id=$row->id") or die("Cant perform Query");  
				$row1=mysqli_fetch_object($result1);
    			echo "images[$i].setAttribute(\"src\",\"$row1->src\");";
    			$i=$i+1;
    			if($i==21)
    				break;
  			}
  			$_SESSION['page']=$_SESSION['page']+1;
		echo "
	</script>";
	?>
	
</body>
</html>
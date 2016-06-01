
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="jquery.js"></script>
	<style type="text/css">
		body{margin: 0;position: absolute;background-color: #000;width: 100%;height: 100%;}
		.body2
		{
			margin: auto;
		}
		.main
		{
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			transform-style: preserve-3d;
			margin: auto;
			margin-top: 17%;
			width: 1000px;
			-webkit-perspective:400px;
			-moz-perspective:400px;
			-ms-perspective:400px;
			-o-perspective:400px;
			perspective:400px;

		}
		.display-style
		{
			background-color: #fff;
			width: 234px;
			height: 160px;
			float: left;
			margin-left: 20px;
			border-radius: 5px;
			-webkit-box-reflect:below 10px -webkit-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.2) 100%);
			-moz-box-reflect:below 10px -moz-box-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.2) 100%);
			-ms-box-reflect:below 10px -ms-box-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.2) 100%);
			-o-reflect:below 10px -o-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.2) 100%);
			-webkit-transition: 1s all ease;
			-moz-transform: 1s all ease;
			-ms-transform: 1s all ease;
			-o-transition: 1s all ease;
			transition: 1s all ease;
		}
		#display_1
		{
			-webkit-transform: rotateY(40deg);
			-moz-transform: rotateY(40deg);
			-ms-transform: rotateY(40deg);
			-o-transform: rotateY(40deg);
			transform: rotateY(40deg);
			margin-left: 0px;
		}
		#display_2
		{
		
		}
		#display_3
		{


		}
		#display_4
		{
			-webkit-transform: rotateY(-40deg);
			-moz-transform: rotateY(-40deg);
			-ms-transform: rotateY(-40deg);
			-o-transform: rotateY(-40deg);
			transform: rotateY(-40deg);
		}
		.start-display
		{
			position: absolute;
			background-color: #000;
			height: 100%;
			width: 100%;
			z-index: 200;
		}
		.start-show
		{
			margin-left: 25%;
			margin-top: 25%;
			color: #00AF00;
			font-size: 35px;
			font-family: 'hiragino sans gb', 'microsoft yahei';
		}
		.view-top
		{
			position: absolute;
			margin: 0px;
			width: 100%;
			height: 60px;
			background-color: #148CCA;
			color: #fff;
			z-index: 100;
		}
		.view-top-1
		{
			position: absolute;
			border-left-color: rgb(56, 172, 231);
			border-left-style: solid;
			border-left-width: 1px;
			border-right-color: rgb(56, 172, 231);
			border-right-style: solid;
			border-right-width: 1px;
			cursor: auto;
			display: inline-block;
			font-family: 'hiragino sans gb', 'microsoft yahei';
			font-size: 14px;
			height: 20px;
			line-height: 20px;
			margin-left: 10%;
			margin-bottom: 22px;
			margin-right: 0px;
			margin-top: 22px;
			padding-bottom: 0px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 0px;
			text-align: center;
			text-decoration: none;
			width: 62px;

		}
		.view-top-1 span a
		{
			color: #fff;
			text-decoration: none;

		}
		.view-top-2
		{
			margin-left: 20%;
		}
		.view-top-3
		{
			margin-left: 30%;
		}
		.view-top-4
		{
			margin-left: 40%;
		}
		.view-top-5
		{
			margin-left: 50%;
		}
		.view-top-6
		{
			margin-left: 60%;
		}

	</style>
	<title>黄嘉翊的官方网站</title>
</head>
<body >
	<div class="start-display">
		<script language="javascript">
			 text = "梦想还是要有的，万一实现了呢？   ";
			 i = 0;
			 function type()
			 { 
			  str  = text.substr(0,i);
			  txt.innerHTML = str + "_";
			  i++;
			  if (i==text.length+1){
			  	$(".start-display").fadeOut(1000);
			   return true;
				}
			  setTimeout("type()",100);
			 }

		</script>
		<div class="start-show">
			<div id="txt"></div>
		</div>
	</div>
	<div class="view-top">
		<div class="view-top-1 view-top-1">
			<span><a href="#">首页</a></span>
		</div>
		<div class="view-top-1 view-top-2">
			<span><a href="#">编程</a></span>
		</div>
		<div class="view-top-1 view-top-3">
			<span><a href="#">网络</a></span>
		</div>
		<div class="view-top-1 view-top-4">
			<span><a href="#">安全</a></span>
		</div>
		<div class="view-top-1 view-top-5">
			<span><a href="#">博客</a></span>
		</div>
		<div class="view-top-1 view-top-6">
			<span><a href="#">了解我</a></span>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			
			type();
			$(".main .display-style").mouseenter(function(){
				style_1(this.id);
			});
			$(".main .display-style").mouseout(function(){
				style_2(this.id);
			});
			function style_1(id_val)
			{
				id_val="#"+id_val;
				$(id_val).css("transform","translateZ(100px)");
			}
			function style_2(id_val)
			{
				id_val="#"+id_val;
				if (id_val == "#display_1") 
					{
						$(id_val).css("transform","translateZ(0px) rotateY(40deg)");
					} 
				else
					if (id_val == "#display_4") 
					{
						$(id_val).css("transform","translateZ(0px) rotateY(-40deg)");
					}
					else

						{
							$(id_val).css("transform","translateZ(0px)");
						}	
			}
		})
	</script>
	<div class="body2">
		<div class="main">
			<div class="display-style" id="display_1">
				<img src="img_3.jpg" alt="">
			</div>
			<div class="display-style" id="display_2">
				<img src="img_1.jpg" alt="">
			</div>
			<div class="display-style" id="display_3">
				<img src="img_2.jpg" alt="">
			</div>
			<div class="display-style" id="display_4">
				<img src="img_4.jpg" alt="">
			</div>
		</div>
	</div>
	
</body>
</html>

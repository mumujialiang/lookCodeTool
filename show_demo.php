<?php header("Access-Control-Allow-Origin: *");?>
<!doctype html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>展示页</title>
<!--	<link rel="stylesheet" href="show_demo_resource/plug_in/highlight/css/an-old-hope.css">-->
	<!--	<script src="show_demo_resource/plug_in/highlight/highlight.pack.js"></script>-->
	<link href="https://cdn.bootcss.com/highlight.js/9.15.4/styles/atom-one-dark.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/highlight.js/9.15.10/highlight.min.js"></script>
	
	<script>hljs.initHighlightingOnLoad();</script>
    <style>
        *{
            padding: 0px;
            margin: 0px;
			font-family: '微软雅黑';
			font-size: 15px;
        }
        body{
            background-color:#212121;
			position: relative;
			left: 0px;
			top: 0px;
        }
        .main-padding{
            box-sizing: border-box;
            padding: 10px;
            overflow: hidden;
			padding-top: 3em
        }
        .hearder{
            background-color: #282c34;
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            box-sizing: border-box;
            line-height: 2em;
            border-bottom: solid 1px rgba(0,0,0,0.28);
            z-index: 997;
            display: flex;
			color: black;
			justify-content: space-between;
			align-items: flex-start;
			padding: 0.3em 0.5em;
			box-sizing: border-box
        }
		.hearder span{
			word-break: keep-all;
			min-width: 0px;
			user-select: none
		}
        .outer{
            width: 100%;
            overflow: hidden;
            border: solid 1px rgba(0,0,0,0.28);
            margin-top: 10px;
            padding-bottom: 10px;
            background-color: #282c34;
            border-radius: 15px;
            box-sizing: border-box;
            padding: 15px;
			position: relative
        }
		.inner{
			display: flex;
			flex-wrap: wrap
		}
		.left{
			flex: 1;
			box-sizing: border-box;
			background-color: white;
			padding: 0px;
			min-width: 0px;
			position: relative
		}
		.left iframe{
			border: 0px;
			width: 100%;
			height: 100%;
			max-height: 80vh;
			overflow: auto
		}
		.right{
			flex: 1;
			box-sizing: border-box;
			overflow-x: auto;
			border-left: none;
			padding-left: 0.5em;
			max-height: 80vh;
			
		}
        .demo-title{
            display: flex;
			padding: 0.3em 0em;
			box-sizing: border-box
        }
        .demo-title>div{
            flex: 1
        }

        .demo-title button{
            cursor: pointer;
        }
        .demo-title p{
            margin-bottom: 0px;
            font-weight: bold;
            font-size: 1.5em
        }
        .open{
            margin-left: 5px;
			text-decoration: none
        }
		.open,.copy{
            border: none;
            background-color: #ff7275;
            border-radius: 0.5em;
            padding: 0.5em;
            color:#1F1F1F;
            outline: none;
			font-size: 0.8em
        }
        .fix-left{
            float: left;
            height: 100vh;
            background-color: white;
            position: fixed;
            z-index: 999;
			overflow-y: auto;
			overflow-x: hidden;
			left: 0px;
			top: 0px;
			min-width: 15em;
			max-width: 50vw;
			user-select: none;
			padding-top: 1em;
			box-sizing: border-box
        }
		.menu{
			display: inline-block;
			font-size: 1em;
			cursor: pointer;
			user-select: none;
			flex-shrink: 0
		}
        .collapse-ul{
			background-color: #E5E5E5;
            box-sizing: border-box;
            margin-top: 0.2em;
            overflow-y: auto;
        }
		.collapse-ul a{
			display: block;
			width: 100%;
			padding: 1em;
			box-sizing: border-box;
			text-decoration: none;
			color: black;
			cursor: pointer;
			word-break: break-all
		}
		.collapse-ul a:hover{
			background-color: #ff7275
		}

		.menu-dir a{
			cursor:alias
		}

		.menu-file a{
			cursor: no-drop
		}
        .fade-to-black{
            background-color: rgba(0,0,0,0.6);
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0px;
            top: 0px;
            z-index: 997;
			cursor: pointer
        }
		.collapse-ul-head{
			text-align: center;
			font-size: 1.2em;
			font-weight: bold;
			margin-top: 1.5em;
			justify-content: center;
			align-items: center;
			color: black;
			user-select: none;
			display: flex;
			word-break: break-all;
			line-height: 1em;
			padding-right: 0.5em;
			box-sizing: border-box
		}
		.collapse-ul-head span{
			user-select: none
		}
		.dark{
			background-color:#6F6F6F
		}
		.guandeng{
			cursor: pointer;
			user-select: none;
			flex-shrink: 0
		}
		.left-fix{
			position: absolute;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,0.52);
			display: none;
		}
		.hearder-center{
			min-width: 0px;
			text-align: center;
			box-sizing: border-box;
			padding-left: 1em;
			padding-right: 1em;
			word-wrap: normal;
			display: flex;
			flex-wrap: nowrap;
			overflow: auto;
			flex: 1;
			justify-content: center
		}
		.hearder-center span{
			flex-shrink: 0
		}
		.hearder-center span,.menu,.guandeng,.fangxiang{
			display: inline-block;
			border-radius: 0.5em;
			background-color:#ff7275;
			padding: 0.3em 0.7em 0.3em 0.7em;
			margin: 0.2em;
			font-size: 1em;
			line-height: 1em;
			cursor: pointer
		}
		.demo-title-left {
			font-size: 1.5em;
			font-weight: bold;
			color: #FF7275
		}
		.close{
			position: absolute;
			right: 0px;
			top: 0px;
			padding: 0.5em;
			line-height: 1em;
			box-sizing: border-box;
			cursor: pointer;
			font-size: 1.5em;
		}
		.mankuandu{
			min-width: 100%;
		}
		.loading{
			width: 100vw;
			height: 100vh;
			position: fixed;
			left: 0px;
			top: 0px;
			background-color: #282c34;
			z-index: 9999;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction:row-reverse
		}
		.loading>div{
			width: 1em;
			height: 1em;
			background-color: #ff7275;
			border-radius: 1em;
			margin: 1em;
			animation: animate linear 1s infinite;
		}
		.loading>div:nth-last-of-type(1){
			animation-delay: 0s;
		}
		.loading>div:nth-last-of-type(2){
			animation-delay: 0.15s;
		}
		.loading>div:nth-last-of-type(3){
			animation-delay: 0.3s;
		}
		.loading>div:nth-last-of-type(4){
			animation-delay: 0.45s;
		}
		.loading>div:nth-last-of-type(5){
			animation-delay: 0.6s;
		}
		@keyframes animate{
			0%,60%,100% {transform: scale(1);}
			30% {transform: scale(2.5);}
		}
		.maodian{
			position: absolute;
			left: 0px;
			top: -3em;
			width: 0px;
			height: 0px;
		}
    </style>
    
</head>

<body>
	<div class="loading">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
    <div class="hearder">
		<span class="menu">菜单</span>
		<span class="hearder-center">
			<?php
				echo '<span>根目录('.basename(__DIR__).')</span>';
				$out = preg_split('/\//', $_GET['path']);
				for($i=0;$i<count($out);$i++){
					if($out[$i]=="")continue;
					echo '/<span>'.$out[$i].'</span>';
				}
			?>
		</span>
<!--		<input type="url" id="url">-->
		<span class="fangxiang">换向</span>
		<span class="guandeng">关灯</span>
	</div>
	
	<div class="fade-to-black"></div>
    <div class="fix-left">
		
		<div class="close">&times;</div>
		<form style="display: none" action="<?php $_SERVER["PHP_SELF"]?>" id="pathForm">
			<input type="text" value="<?php echo $_GET['path']; ?>" name="path">
		</form>

		<?php 
				$path = iconv("utf-8","GB2312",$_GET['path'])."/*";
				//$path = $_GET['path']."/*";
				if(!preg_match('/^[a-zA-Z]:/',$path)){
					$path = preg_replace('/^./',"",$path);
				}
				$file = glob($path);
			?>
		<p class="collapse-ul-head"><svg t="1569686765918" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3647" width="20" height="20"><path d="M848.8576 199.1936H415.7568c0-26.5728-21.5424-48.128-48.128-48.128H175.1424c-26.5728 0-48.128 21.5424-48.128 48.128V343.5648c0 26.5984 21.5424 48.1408 48.128 48.1408h673.728c26.5728 0 48.128-21.5424 48.128-48.1408v-96.2432c-0.0128-26.5856-21.5552-48.128-48.1408-48.128z" fill="#CCA352" p-id="3648"></path><path d="M800.7424 247.3088H223.2576c-26.5728 0-48.128 21.5424-48.128 48.128v48.128c0 26.5984 21.5424 48.1408 48.128 48.1408h577.472c26.5728 0 48.128-21.5424 48.128-48.1408v-48.128c0-26.5728-21.5424-48.128-48.1152-48.128z" fill="#FFFFFF" p-id="3649"></path><path d="M848.8576 295.4368H175.1424c-26.5728 0-48.128 21.5424-48.128 48.128v481.2544c0 26.5472 21.5424 48.128 48.128 48.128h673.728c26.5728 0 48.128-21.568 48.128-48.128V343.552c-0.0128-26.5728-21.5552-48.1152-48.1408-48.1152z" fill="#FFCC66" p-id="3650"></path></svg>&nbsp;文件夹</p>
		<div class="collapse-ul menu-dir" id="clickSubmit">
			<a class="back">返回上级</a>
			<?php
			
			for($i=0,$j=0;$i<count($file);$i++){
				if(is_dir($file[$i])){
					preg_match('/\/*[^\/]+$/', $file[$i],$out);
					$out = preg_replace('/^\/*/',"",$out[0]);
					echo '<a>'.iconv("GB2312","utf-8",$out).'</a>';
				}
			}
			?>
		</div>
		
		<p class="collapse-ul-head"><svg t="1569686979826" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6160" width="20" height="20"><path d="M145.6 0c-44.8 0-80 36.8-80 81.6v860.8c0 44.8 35.2 81.6 80 81.6h732.8c44.8 0 81.6-36.8 81.6-81.6V324.8L657.6 0h-512z" fill="#F7622C" p-id="6161"></path><path d="M960 326.4v16H755.2s-100.8-20.8-99.2-108.8c0 0 4.8 92.8 97.6 92.8H960z" fill="#F54921" p-id="6162"></path><path d="M657.6 0v233.6c0 25.6 17.6 92.8 97.6 92.8H960L657.6 0z" fill="#FFFFFF" opacity=".5" p-id="6163"></path><path d="M366.4 812.8h-4.8L240 758.4c-8-3.2-12.8-11.2-12.8-20.8 0-8 4.8-16 12.8-19.2l121.6-54.4c1.6 0 3.2-1.6 4.8-1.6 8 0 14.4 6.4 14.4 14.4 0 6.4-3.2 11.2-8 14.4l-112 48 112 46.4c4.8 3.2 8 8 8 14.4 0 8-6.4 12.8-14.4 12.8z m136-176L432 849.6c-3.2 6.4-8 9.6-14.4 9.6-9.6 0-16-6.4-16-14.4 0-1.6 1.6-3.2 1.6-4.8l70.4-211.2c3.2-6.4 8-11.2 14.4-11.2 9.6 0 14.4 6.4 14.4 14.4v4.8z m163.2 121.6L544 812.8h-4.8c-8 0-14.4-4.8-14.4-12.8 0-6.4 3.2-11.2 8-14.4l113.6-46.4-113.6-48c-4.8-3.2-8-8-8-14.4 0-8 6.4-14.4 14.4-14.4 1.6 0 3.2 1.6 4.8 1.6l121.6 54.4c8 3.2 12.8 11.2 12.8 19.2 0 9.6-4.8 17.6-12.8 20.8z" fill="#FFFFFF" p-id="6164"></path></svg>&nbsp;案例</p>
        <div class="collapse-ul menu-demo">
			
			<?php
			for($i=0,$j=0;$i<count($file);$i++){
				if(is_file($file[$i])){
					if($file[$i]==basename(__FILE__))continue;
					if(preg_match('/.(html$|php$|css$|js$|json$)/',$file[$i])){
						preg_match('/\/*[^\/]+$/', $file[$i],$out);
						$out = preg_replace('/^\/*/',"",$out[0]);
						echo '<a href="#demo'.$j++.'">'.iconv("GB2312","utf-8",$out) .'</a>';
					}
				}
			}
			?>
        </div>
		
		<p class="collapse-ul-head"><svg t="1569687053251" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7646" width="20" height="20"><path d="M107.1 569.4h82.4v297h-82.4" p-id="7647" fill="#f8327d"></path><path d="M912.1 276.3l-50.2-50c-0.8-0.8-1.5-1.6-2.3-2.4l-167-166.7c-0.8-0.8-1.6-1.4-2.4-2.2l-50-50c-2.8-2.8-8.2-5-12.1-5H212.6c-58.1 0-105.4 47.2-105.4 105.1v465.5h82.5V105.1c0-12.4 10.5-22.9 22.9-22.9H577v152c0 58 47.3 105.1 105.4 105.1h152.4v579.5c0 12.4-10.5 22.9-22.9 22.9H212.5c-12.4 0-22.9-10.5-22.9-22.9v-57.9h-82.5v57.9c0 58 47.3 105.1 105.4 105.1h599.2c58.1 0 105.4-47.2 105.4-105.1V288.4c0-3.9-2.2-9.3-5-12.1z m-124.5-19.2H682.3c-12.4 0-22.9-10.5-22.9-22.9V129.1c0-3.9 2.2-4.8 5-2.1l125.3 125c2.7 2.8 1.8 5.1-2.1 5.1z" p-id="7648" fill="#f8327d"></path><path d="M635.2 434.9c0 23.7-5.5 45.6-16.4 65.6-10.9 20.1-25.5 37.4-43.8 52-18.2 14.6-31 29.2-38.3 43.8-7.3 14.6-10.9 24.6-10.9 30.1v19.1h-49.2v-27.3c0-16.4 4.1-32.3 12.3-47.9 8.2-15.5 22.3-32.3 42.4-50.6 14.6-12.7 24.6-26 30.1-39.6s8.2-26.9 8.2-39.6c0-23.7-5.5-41.4-16.4-53.3-10.9-11.8-26.4-17.8-46.5-17.8s-36.9 7.8-50.6 23.2c-13.7 15.5-20.5 40.6-20.5 75.2h-62.9c1.8-51 15.5-88.9 41-113.5 25.5-24.6 56.5-36.9 93-36.9 40.1 0 71.5 10.9 94.3 32.8 22.8 21.8 34.2 50.1 34.2 84.7zM531.3 790.3h-60.2v-65.6h60.2v65.6z" p-id="7649" fill="#f8327d"></path></svg>&nbsp;其他文件</p>
		<div class="collapse-ul menu-file">
			<?php
			for($i=0;$i<count($file);$i++){
				if(is_file($file[$i])){
					if(!preg_match('/.(html$|php$|css$|js$|json$)/',$file[$i])){
						preg_match('/\/*[^\/]+$/', $file[$i],$out);
						$out = preg_replace('/^\/*/',"",$out[0]);
						echo '<a>'.iconv("GB2312","utf-8",$out).'</a>';
					}
				}
			}
			?>
		</div>
    </div>
    <div class="main-padding">
		<?php
		for($i=0,$j=0;$i<count($file);$i++){
			if(is_file($file[$i])){
				if($file[$i]==basename(__FILE__))continue;
				if(preg_match('/.(html$|php$|css$|js$|json$)/',$file[$i])){
					preg_match('/\/*[^\/]+$/', $file[$i],$out);
					$out = preg_replace('/^\/*/',"",$out[0]);
					echo 
					'<div class="outer">
						<div class="maodian" id="demo'.$j++.'"></div>
						<div class="demo-title">
							<div class="demo-title-left">'.iconv("GB2312","utf-8",$out).'</div>
							<div>
								<button class="copy">Copy</button>
								<a class="open" target="_blank" href="'.$file[$i].'">Open</a>
							</div>
						</div>
						<div class="inner">
							<div class="left">
								<iframe src="';
								if(preg_match('/^[a-zA-Z]:/',$file[$i])){
									echo 'file:///'.urlencode($file[$i]);
									
								}else{
									echo iconv("GB2312","utf-8",$file[$i]);
								}
								echo '"></iframe>
								<div class="left-fix"></div>
							</div>
							<pre class="right">
								<code></code>
							</pre>
						</div>

						<div class="right2" style="display:none">';
							show_source($file[$i]);
						echo '</div>
					</div>';
				}
			}
		}
		if($j==0)echo '<p style="font-size: 10em;text-align: center;user-select: none">啥也没</p><p style="font-size: 3em;text-align: center;user-select: none;word-break: keep-all">(ノへ￣、)</p>';
		?>
		
		
	</div>
    
    
    
<!--    <script src="show_demo_resource/js/jquery.js"></script>-->
	<script src="https://cdn.bootcss.com/jquery/2.0.3/jquery.js"></script>
	<script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>
	<script src="https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script>
		$("#url").blur(function(){
			var url = this.value;
			url = url.replace(/\\/img,"/");
			$("#pathForm input").attr("value",url);
			$("#pathForm").submit();
		})
		
		$(window).load(function(){
			$(".loading").fadeOut()
		})
        $(".right,.hearder-center,.fix-left").niceScroll();

		$(".fangxiang").click(function(){
			$(".left").toggleClass("mankuandu");
			if($(".left").hasClass("mankuandu")){
				$.cookie("fangxiang","heng")
			}else{
				$.cookie("fangxiang","shu")
			}
		})

		
		if($(".hearder-center span").length==1){
			$(".back").css({display:"none"})
		}
		
		$(".hearder-center span").click(function(){
			if($(this).index()==0){
				$("#pathForm input").attr("value","");
			}else{
				var text = $(this).text();
				text = '/\\S*'+text+'/';
				var out = $(".hearder-center").text();
				out = out.replace(/^[^\/]+\//,"/");
				out = out.match(eval(text)).toString();
				$("#pathForm input").attr("value",out);
			}
			$("#pathForm").submit();
		})
		
		$(".collapse-ul").each(function(index,element){
			if($(element).children("a").length==0){
				$(".collapse-ul-head").eq(index).css({display:"none"})
			}
		})
		$(".guandeng").click(function(){
			$(this).add($(".fix-left")).toggleClass("dark");
			if($(this).hasClass("dark")){
				$(".left-fix").fadeIn();
				$(this).text("开灯");
				$.cookie("guandeng","on");
			}else{
				$(".left-fix").fadeOut();
				$(this).text("关灯");
				$.cookie("guandeng","off");
			}
		})
		$(".left").bind({
			mouseenter:function(event){
				if($(".guandeng").hasClass("dark")){
					$(this).find(".left-fix").stop().fadeOut(300);
				}
			},
			mouseleave:function(event){
				if($(".guandeng").hasClass("dark")){
					$(this).find(".left-fix").stop().fadeIn(300);
				}
			}
		})


		$("#clickSubmit a").click(function(){
			if($(this).hasClass("back")){
				$(".hearder-center span:last-of-type").prev().trigger("click")
			}else{
				$("#pathForm input").attr("value",$("#pathForm input").attr("value")+"/"+$(this).text());
				$("#pathForm").submit();
			}
		})
		
		//$(".hearder-center").html(document.location.href)

		$(".outer").each(function(index,element){
			$(element).find("pre").empty();
			$(element).find("pre").html("<code></code>")
			var htmlText = $(element).find(".right2").text()
			$(element).find(".right2").text(htmlText)
			$(element).find(".right").find("code").text(htmlText.replace(/^[\s\t]*/,"").replace(/[\s\t]*$/,""));
		})
		
		$(".copy").click(function(){
			var parents = this.parentNode.parentNode.parentNode;
			var range = document.createRange();
			var selection = window.getSelection();
			selection.removeAllRanges();
			range.selectNodeContents(parents.querySelector(".right"));
			selection.addRange(range);
			document.execCommand('copy');
			selection.removeAllRanges();
		})
		
		$(".menu").click(function(){
			$(".fix-left").slideDown();
			$(".fade-to-black").fadeIn()
		})
		$(".fade-to-black,.close").click(function(){
			$(".fix-left").slideUp();
			$(".fade-to-black").fadeOut();
		})
		
		if($.cookie("guandeng")=="on"){
			$(".guandeng").trigger("click")
		}
		if($.cookie("fangxiang")=="heng"){
			$(".fangxiang").trigger("click")
		}
  
    </script>
</body>
</html>

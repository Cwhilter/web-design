<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Computer Vision Group(UJS)</title>
		<link href="/yfsj-cs/Public/css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/yfsj-cs/Public/css/slide.css">
		<meta name="keywords" content="图像识别" />
		
	</head>
	<body>
	<div class="top-header">    
	     <div class="top-header-left">
		 <h1><img src="/yfsj-cs/Public/images/logo1.png"/>&nbsp;扬帆计算机视觉研究组<span><a href="http://localhost/yfsj-cs/index.php/Home/admin">Login &#73; &nbsp;</a></span></h1>
		 
		 </div>	
		 <div class="top-header-right">
						<ul>
							<li></li>	
						</ul>
					</div>
	<div class="clear"></div>
</div>
<div class="main-header">
	 <div class="top-header-left">
		 <div class="logo">			 
		 </div>
		 <div class="top-nav">
			<ul>
				<li><a href="http://localhost/yfsj-cs/index.php">主页</a></li>
				<li><a href="http://localhost/yfsj-cs/index.php/Home/yjfx">研究方向</a></li>
				<li><a href="http://localhost/yfsj-cs/index.php/Home/article">新闻动态</a></li>
				<li><a href="index.php?page_type=article">学术出版</a></li>
				<li><a href="index.php?page_type=news">基金项目</a></li>
				<li><a href="index.php?page_type=news">课程教学</a></li>
				<li><a href="index.php?page_type=news">数据代码</a></li>
				<li><a href="http://localhost/yfsj-cs/index.php/Home/member">组内成员</a></li>
			</ul>
		 </div>
		<div class="clear"> </div>
	 </div>
</div>
     
	<div class="wrap">
				<div class="about-left">
				<h4>关于我们</h4>
				<img src="/yfsj-cs/Public/images/ujs.jpg" title="about" />
				<p>&nbsp;&nbsp;江苏大学是2001年8月经教育部批准，由原江苏理工大学、镇江医学院、镇江师范专科学校合并组建。原江苏理工大学的前身镇江农业机械学院，1960年由南京工学院（现东南大学）分设独立建校，1978年被国务院确定为全国88所重点大学之一，1981年成为全国首批具有博士、硕士、学士学位授予权的高校，1982年及1994年先后更名为江苏工学院和江苏理工大学，综合实力一直位居全国高校百强之列。学校坐落在风景秀丽的国家历史文化名城——江苏省镇江市，办学历史可追溯到1902年刘坤一、张之洞等在南京创办的三江师范学堂。</p><br />
				<p>&nbsp;&nbsp;学校学科门类齐全，涵盖工学、理学、医学、管理学、经济学、法学、文学、历史学、教育学、艺术学等10大学科门类。设有24个学院，87个本科专业；学校博士学位授权点涵盖13个一级学科，设有13个博士后科研流动站；硕士学位授权点涵盖42个一级学科，有10个硕士专业学位类别，26个工程硕士授权领域。现有2个国家重点学科，1个国家重点（培育）学科，6个江苏高校优势学科。学校的工程学、材料科学、临床医学和化学等4个学科进入ESI排名全球前1%。2014年世界大学排名中心全球大学排名，学校进入TOP1000，列中国大陆高校第62位。中国管理科学研究院《2015中国大学评价》，学校综合排名列全国高校第55位。</p>
				</div>
				<div class="about-right">
					<h4>组内成员</h4>
					<?php if(is_array($member)): $k = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><img src="/yfsj-cs/Public/images/staff1.jpg">
					<p>姓名：<?php echo ($data["name"]); ?> </p>
					<p>性别：<?php echo ($data["sex"]); ?></p>
					<p>专业：<?php echo ($data["major"]); ?></p>
					<p>个人简介：<?php echo ($data["introduction"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>			
			<div class="clear"> </div>		
</div>

    <div class="clear">
</div>
<div class="footer">
	<div class="sub-footer">
		<div class="wrap">
			<div class="left-part">
				<a href="#"><img src="/yfsj-cs/Public/images/logo1.png"> &#169 2013</a>
			</div>
			<div class="right-part">
				<p>&#169 All rights Reserved | Designed by WP</p>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
</div>

		<!-- End-wrap-->


	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
	<link href="/yfsj-cs/Public/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	<link href="/yfsj-cs/Public/css/houtai.css" type="text/css" rel="stylesheet">    
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Computer Vision Group(UJS)</title>
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
	<div class="admin">
	     <div class="admin_left">
	 <link href="/yfsj-cs/Public/css/houtai.css" rel="stylesheet" type="text/css" />
  <div class="ad-menu" id="ad-menu">
                <div class="ad-logo"><img src="/yfsj-cs/Public/images/m-logo.png" height="103" width="130"></div>
                <div class="ad-list">
                    <ul>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;新闻动态管理</div>
                            <dl>
                                <dd>
                                    <a href="http://localhost/yfsj-cs/index.php/Home/admin" class="dd-item">显示全部动态</a>
                                </dd>
                                <dd>
                                    <a href="http://localhost/yfsj-cs/index.php/Home/admin_newsImage" class="dd-item">新闻图片管理</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;学术出版管理</div>
                            <dl>
                                <dd>
                                    <a href="#" class="dd-item">显示全部</a>
                                </dd>
                                <dd>
                                    <a href="#" class="dd-item">添加</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;基金项目管理</div>
                            <dl>
                                <dd>
                                    <a href="#" class="dd-item">显示全部</a>
                                </dd>
                                <dd>
                                    <a href="#" class="dd-item">添加项目</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;课程教学管理</div>
                            <dl>
                                <dd>
                                    <a href="#" class="dd-item">显示全部课程</a>
                                </dd>
                                <dd>
                                    <a href="#" class="dd-item">添加最新课程</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;数据代码管理</div>
                            <dl>
                                <dd>
                                    <a href="#" class="dd-item">显示全部代码</a>
                                </dd>
                                <dd>
                                    <a href="#" class="dd-item">添加最新数据</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <div class="li-item"><img src="/yfsj-cs/Public/images/icon2.png"/>&nbsp;组内成员管理</div>
                            <dl>
                                <dd>
                                    <a href="http://localhost/yfsj-cs/index.php/Home/admin_member" class="dd-item">显示全部成员<span class="scm dd-ar"></span></a>
                                </dd>
                                <dd>
                                    <a href="http://localhost/yfsj-cs/index.php/Home/admin_memberImage" class="dd-item">成员照片管理</a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
			<div class="clear"></div>
		<script type="text/javascript" src="/yfsj-cs/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/yfsj-cs/Public/js/contabs.js"></script>
	     </div>
		 <div class="admin_right">
		 
	 
<link href="/yfsj-cs/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
<link href="/yfsj-cs/Public/css/loadfile_style.css" rel="stylesheet" type="text/css"  media="all" />
<link href="/yfsj-cs/Public/css/jquery.fileupload.css" rel="stylesheet" type="text/css"  media="all" />
<script>
   $(function(){
	   var url=window.location.hostname==='http://localhost/yfsj-cs/Public/images/news/';
	   $('#fileupload').fileupload({
		   url:url,
		   dataType:'json',
		   done:function(e,data){
			   $.each(data.result.files,function(index,file)
			   {
				   $('<p/>').text(file,name).appendTo('#files');
			   });
		   },
		   progressall:function(e,data)
		   {
			   var progress=parseInt(data.loaded/data.total*100,10);
			   $('#process.process-bar').css('width',progress+'%');
		   }
	   }).on('fileuploadadd',function(e,data){
		   data.context=$('<div/>').appendTo('#files');
		   $.each(data.files,function(index,file){
			   var node=$('<p/>').append('<span/>').text(file.name);
			   if(!index){
				   node.append('<br/>').append(uploadButton.clone(true).data(data));
			   }
			   node.appendTo(data.context);
		   });
	   }).on('fileuploadprocessalways',function(e,data){
		   var index=data.index,
		   file=data.files[index],
		   node=$(data.context.children()[index]);
		   if(file.preview){
			   node.prepend('<br/>').prepend(file.preview);
		   }
		   if(file.error){
			   node.append('<br/>').append($('<span class="text-danger"/>').text(file.error));
		   }
		   if(index+1===data.files.length){
			   data.context.find('button').text('Upload').prop('disabled',!!data.files.error);
		   }
	   }).on('fileuploadprogressall',function(e,data){
	   }).prop(
	   'disabled',
	   !$.support.fileInput).parent().addClass($.support.fileInput?undefined:'disabled');
   });
</script>

     <h1>上传新闻图片</h1>
     <span class="btn btn-success fileinput-button">
     <i class="glyphicon glyphicon-plus"></i>
     <span>请选择图片</span>
        <input id="fileupload" type="file" name="file[]" multiple="multiple" />
     </span>
     <br />
     <!--进度条-->
     <div id="process" class="process">
         <div class="process-bar process-bar-sucess"></div>
     </div>
     <!--已上传文件列表-->
     <div id="files" class="files"></div>

<script type="text/javascript" src="/yfsj-cs/Public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/yfsj-cs/Public/js/uploadfile_js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="/yfsj-cs/Public/js/uploadfile_js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/yfsj-cs/Public/js/uploadfile_js/jquery.fileupload.js"></script>


	     </div> 
	</div>
	<div class="clear"></div>
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
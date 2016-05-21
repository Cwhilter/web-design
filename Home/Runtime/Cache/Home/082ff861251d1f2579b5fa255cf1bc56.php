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
		 
	 
<link href="/yfsj-cs/Public/css/flexigrid.css" rel="stylesheet" type="text/css"  media="all" />
<script type="text/javascript">
$( document ).ready(function(e) {
	
$("#flexmel").flexigrid({
         height:510,
		 width:'auto',
         url:'../Home/memberImage_show',
		 dataType:'json',
         colModel:[  
		   {display:'编号',name:'id',width:200,align:'center',hide:false,toggle:false},
		   {display:'标题',name:'title',width:400,align:'center',hide:false,toggle:false},
		   {display:'文件名',name:'path',width:400,align:'center',hide:false,toggle:false},
		   ],
		 buttons:[
		   {name:'新增',displayname:'新增',bclass:'add',onpress:test},
		   {name:'删除',displayname:'删除',bclass:'delete',onpress:test},
		   {name:'查看',displayname:'查看',bclass:'edit',onpress:test},
		   ],
		 method:'POST',
		 autoload:true,
         errormsg:'发生异常',
		 usepager:true,
		 nowrap:false,
		 title:'组内成员图片管理',
		 pagestat:'显示记录从{from}到{to}，总数{total}条',
		 useRp:true,
		 rp:5,
		 rpOptions:[5,10,20],
		 nomsg:'没有符合条件的记录存在',
		 minColToggle:0,
		 showTableToggleBtn:true,
		 showTableToggleBtn:true,
		 showcheckbox:true,
		 resizable:false
}
);
      function test(com, grid) {
                if (com == '删除') {
				if(($('.trSelected', grid).length)==0)
				    {
					confirm('未选中任何记录！请选择后再进行操作');
				    }
				else{
				     
				   var length=$('.trSelected', grid).length;
				   var del=new Array(length);
				   for (var i = 0;i < length;i++){
				      var str= $('.trSelected',grid).eq(i).find('td').eq(0).text();
				      del[i]=str;
				      }
				  var values=confirm('确定删除？');
				  if(values==true){
				  window.location.href="../Home/memberimage_delete/"+encodeURIComponent(del)+""
				  }else{}
				  
					}
                } else if (com == '新增') {
                    window.location.href="../Home/Home/View/"
                }
				else if(com=='查看'){
					if(($('.trSelected', grid).length)==0)
				    {
					confirm('未选中任何记录！请选择后再进行操作');
				    }
				else{
					if(($('.trSelected', grid).length)>1)
				    {
					confirm('一次只能选中一个图片！');
				    }
				    else{
				    var filename=$('.trSelected',grid).eq(0).find('td').eq(2).text();
					var path="/yfsj-cs/Public/images/member/"+filename;
					$("#onlyone").attr("src",path);
					//$(".addform").append("<img src=\""+path+"\"/>");
					openDialogAdd();
					}
				}
				}
            }
	  function openDialogAdd(){
	            $('.showimg').slideDown();
				
				}
	  
});
function cutdown(){
          $('.showimg').slideUp();
         } 
		                                                                                 
</script>
<div class="table">
<table id="flexmel">
</table>
</div>
<div class="showimg" style="display:none;"> 
     <img id="onlyone" src=""/>			
     <div>
	 <span><input type="button" value="关闭" onclick="cutdown()"></span>
	 </div>	
</div>

<script type="text/javascript" src="/yfsj-cs/Public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/yfsj-cs/Public/js/flexigrid.js"></script>

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
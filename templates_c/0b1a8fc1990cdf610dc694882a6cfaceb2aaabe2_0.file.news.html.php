<?php
/* Smarty version 3.1.29, created on 2016-03-20 18:55:53
  from "C:\inetpub\wwwroot\yfsj\guest\templates\news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ee81b980e490_13187473',
  'file_dependency' => 
  array (
    '0b1a8fc1990cdf610dc694882a6cfaceb2aaabe2' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\yfsj\\guest\\templates\\news.html',
      1 => 1458443599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ee81b980e490_13187473 ($_smarty_tpl) {
?>
<link href="./css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link rel="stylesheet" href="css/slide.css">
           <div class="wrap">
		   <h4>最新动态</h4>
				<div class="footer-grid1 footer-box2">
					<ul>
					<?php
$__section_news_id_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id'] : false;
$__section_news_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_news_id_0_total = $__section_news_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_news_id'] = new Smarty_Variable(array());
if ($__section_news_id_0_total != 0) {
for ($__section_news_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] = 0; $__section_news_id_0_iteration <= $__section_news_id_0_total; $__section_news_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']++){
?>
					<p><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] : null)]['date'];?>
&nbsp;<a href="#"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] : null)]['title'];?>
</a></p>
					
					<?php
}
}
if ($__section_news_id_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_news_id'] = $__section_news_id_0_saved;
}
?>
					</ul>
				</div>		
			<div class="footer-grid footer-box3">
				
			<div class="ck-slide">
			<ul class="ck-slide-wrapper">
				<li>
                    <a href="javascript:"><img src="images/1.jpg" alt=""></a>
				</li>
				<li style="display:none">
					<a href="javascript:"><img src="images/2.jpg" alt=""></a>
				</li>
				<li style="display:none">
					<a href="javascript:"><img src="images/3.jpg" alt=""></a>
				</li>
				<li style="display:none">
					<a href="javascript:"><img src="images/4.jpg" alt=""></a>
				</li>
				<li style="display:none">
					<a href="javascript:"><img src="images/5.jpg" alt=""></a>
				</li>
			</ul>
			<a href="javascript:;" class="ctrl-slide ck-prev">上一张</a> <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
			<div class="ck-slidebox">
				<div class="slideWrap">
					<ul class="dot-wrap">
						<li class="current"><em>1</em></li>
						<li><em>2</em></li>
						<li><em>3</em></li>
						<li><em>4</em></li>
						<li><em>5</em></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- js -->
		<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
		<!--<?php echo '<script'; ?>
 src="js/slide.min.js"><?php echo '</script'; ?>
>-->
        <?php echo '<script'; ?>
 src="js/slide.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$('.ck-slide').ckSlide({
				autoPlay: true,//默认为不自动播放，需要时请以此设置
				dir: 'x',//默认效果淡隐淡出，x为水平移动，y 为垂直滚动
				interval:3000//默认间隔2000毫秒
				
			});
		<?php echo '</script'; ?>
>
		
			<!-- End-Header-->
				</div>
				
				<div class="footer-grid footer-box">
					<h4>研究组简介</h4>
					<p>&nbsp;&nbsp;图像识别是人工智能的一个重要领域。为了编制模拟人类图像识别活动的计算机程序，人们提出了不同的图像识别模型。例如模板匹配模型。这种模型认为，识别某个图像，必须在过去的经验中有这个图像的记忆模式，又叫模板。当前的刺激如果能与大脑中的模板相匹配，这个图像也就被识别了。例如有一个字母A,如果在脑中有个A模板,字母A的大小、方位、形状都与这个A模板完全一致,字母A就被识别了。这个模型简单明了，也容易得到实际应用。但这种模型强调图像必须与脑中的模板完全符合才能加以识别，而事实上人不仅能识别与脑中的模板完全一致的图像，也能识别与模板不完全一致的图像。例如,人们不仅能识别某一个具体的字母A,也能识别印刷体的、手写体的、方向不正、大小不同的各种字母A。同时,人能识别的图像是大量的，如果所识别的每一个图像在脑中都有一个相应的模板，也是不可能的。<br>
&nbsp;&nbsp;为了解决模板匹配模型存在的问题，格式塔心理学家又提出了一个原型匹配模型。这种模型认为，在长时记忆中存储的并不是所要识别的无数个模板，而是图像的某些“相似性”。从图像中抽象出来的“相似性”就可作为原型，拿它来检验所要识别的图像。如果能找到一个相似的原型，这个图像也就被识别了。这种模型从神经上和记忆探寻的过程上来看，都比模板匹配模型更适宜，而且还能说明对一些不规则的，但某些方面与原型相似的图像的识别。但是，这种模型没有说明人是怎样对相似的刺激进行辨别和加工的，它也难以在计算机程序中得到实现。因此又有人提出了一个更复杂的模型，即“泛魔”识别模型。<br>
&nbsp;&nbsp;一般工业使用中，采用工业相机拍摄图片，然后利用软件根据图片灰阶差做处理后识别出有用信息，图像识别软件国外代表的有康耐视等，国内代表的有图智能等。</p>
				</div>
					
				<div class="clear"> </div>
			</div>
			</div>
			<div class="clear"> </div>
			<div class="wrap">
			
			<div class="image-slider">
				<!-- Slideshow 1 -->
			    
				 <!-- Slideshow 2 -->
			</div>
			<div class="content">
				<div class="block">
				<div class="box grid">
					<h3>研究方向<br /></h3>
					<img src="./images/img1.png" title="liveSupport" />
					<p>图像识别 </p>
					<a href="http://www.bing.com/knows/search?q=%E5%9B%BE%E5%83%8F%E8%AF%86%E5%88%AB&mkt=zh-cn&FORM=BKACAI">了解更多</a>
				</div>
				<div class="box grid">
					<h3>研究成果<br /></h3>
					<img src="./images/static.png" title="liveSupport" />
					<p>车牌识别 </p>
					<a href="#">了解更多</a>
				</div>
				<div class="box grid">
					<h3>学术出版<br /></h3>
					<img src="./images/inter.png" title="liveSupport" />
					<p>敬请期待</p>
					<a href="#">了解更多</a>
				</div>
				<div class="box grid">
					<h3>组内成员<br /></h3>
					<img src="./images/pos.png" title="liveSupport" />
					<p>敬请期待</p>
					<a href="#">了解更多</a>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="block1">
				<div class="box1 grid1">
					<h3>我们的成果</h3>
					<img src="./images/block2-im1.jpg" title="img1" />
					<h4>花卉识别</h4>
					<p>敬请期待。。 </p>
					<a href="#">More</a>
				</div>
				<div class="box1 grid1">
					<h3>我们的发展</h3>
					<img src="./images/block2-img2.jpg" title="img1" />
					<h4>未来应用</h4>
					<p>敬请期待。。</p>
					<a href="#">More</a>
				</div>
				<div class="box1 grid1">
					<h3>我们的技术</h3>
					<img src="./images/block2-im3.jpg" title="img1" />
					<h4>人工智能</h4>
					<p>敬请期待 </p>
					<a href="#">More</a>
				</div>
				<div class="clear"> </div>	
			</div>
			</div>
			</div>
			<div class="wrap">
			<div class="footer-grid footer-box">
					<h4>相关网站</h4>
					<ul>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://iris.usc.edu/USC-Computer-Vision.html"> USC Computer Vision Group</a>：南加大，多目标跟踪/检测等；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://www.vision.ee.ethz.ch/"> ETHZ Computer Vision Laboratory</a>：苏黎世联邦理工学院，欧洲最好的几个CV/ML研究机构；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://www.cse.ohio-state.edu/~jwdavis/"> James W. Davis</a>：俄亥俄州立，视频监控；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://www.dabi.temple.edu/~hbling/"> Haibin Ling</a>：天普大学，L1-Tracker及后续扩展，源码分享；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://lrs.icg.tugraz.at/index.php"> Learning, Recognition, and Surveillance</a>：奥地利 TU Graz，在线学习，跟踪/检测等，源码分享；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://research.microsoft.com/en-US/people/jamiesho/default.aspx"> Jamie Shotton</a>：属微软剑桥研究中心，Decision/Regression Forests；</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://www4.comp.polyu.edu.hk/~cslzhang/"> Zhang Lei</a>：香港理工，稀疏表示，人脸识别</p>
						<p><img src="./images/marker.gif" title="marker" /><a href="http://www.patternrecognition.cn/~jian/"> Yang Jian</a>：南京理工大学，2DPCA，人脸识别；</p>
					</ul>
				</div>
				<div class="clear">
				</div>
				</div><?php }
}

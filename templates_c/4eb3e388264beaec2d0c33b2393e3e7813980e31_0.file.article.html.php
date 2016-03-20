<?php
/* Smarty version 3.1.29, created on 2016-03-20 22:08:22
  from "C:\inetpub\wwwroot\yfsj\guest\templates\article.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56eeaed684d9e8_83176833',
  'file_dependency' => 
  array (
    '4eb3e388264beaec2d0c33b2393e3e7813980e31' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\yfsj\\guest\\templates\\article.html',
      1 => 1458482901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56eeaed684d9e8_83176833 ($_smarty_tpl) {
?>
<link href="./css/style.css" rel="stylesheet" type="text/css"  media="all" />
<div class="wrap">
    <div class="title">
         <h1>新闻动态</h1>
         <div class="title-left">
		 <?php
$__section_news_id_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id'] : false;
$__section_news_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_news_id_0_total = $__section_news_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_news_id'] = new Smarty_Variable(array());
if ($__section_news_id_0_total != 0) {
for ($__section_news_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] = 0; $__section_news_id_0_iteration <= $__section_news_id_0_total; $__section_news_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']++){
?>
		 
		     <li><p><img src="./images/icon2.png"/><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] : null)]['date'];?>
&nbsp;<a href="index.php?page_type=article&title_number=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_news_id']->value['index'] : null)]['title'];?>
</a></p></li>
			<?php
}
}
if ($__section_news_id_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_news_id'] = $__section_news_id_0_saved;
}
?>
         </div>
		 <div class="title-right">
		 <li><p><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['number']->value]['body'];?>
</p></li>
		 </div>
    </div>
</div>
<div class="clear">
</div><?php }
}

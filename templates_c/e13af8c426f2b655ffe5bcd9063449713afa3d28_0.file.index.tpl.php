<?php
/* Smarty version 3.1.29, created on 2016-03-20 18:55:53
  from "C:\inetpub\wwwroot\yfsj\guest\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ee81b9772740_69624642',
  'file_dependency' => 
  array (
    'e13af8c426f2b655ffe5bcd9063449713afa3d28' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\yfsj\\guest\\templates\\index.tpl',
      1 => 1457961807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_56ee81b9772740_69624642 ($_smarty_tpl) {
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Computer Vision Group(UJS)</title>
		<meta name="keywords" content="图像识别" />		
	</head>
	<body>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_html']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html>

<?php }
}

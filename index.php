<?php
require('./config.php');
if(isset($_GET["page_type"]))
{
$page=$_GET["page_type"];
}
else
{
$page="";
}
switch($page){
    case 'member':
//	include_once "member.php";
	$smarty->assign('admin_html','member.html');
	break;
	case 'article':
	include_once"article.php";
	$smarty->assign('admin_html','article.html');
	break;
	default:
	include_once "news.php";
	$smarty->assign('admin_html','news.html');
	break;
	}
$smarty->display('index.tpl');

?>
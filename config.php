<?php
define('SMARTY_DIR', './libs/');
require_once(SMARTY_DIR .'Smarty.class.php');
require_once('./class.php');
$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir  = './templates_c/';
$smarty->config_dir   = './configs/';
$smarty->cache_dir    = './cache/';
$connobj=new ConnDB("mysql","localhost","root","wp971307","yfsj");//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行连接操作，返回连接标识
?>
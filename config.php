<?php
define('SMARTY_DIR', './libs/');
require_once(SMARTY_DIR .'Smarty.class.php');
require_once('./class.php');
$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir  = './templates_c/';
$smarty->config_dir   = './configs/';
$smarty->cache_dir    = './cache/';
$connobj=new ConnDB("mysql","localhost","root","wp971307","yfsj");//���ݿ�������ʵ����
$conn=$connobj->GetConnId();		//ִ�����Ӳ������������ӱ�ʶ
?>
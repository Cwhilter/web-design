<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'yfsj', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'wp971307', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀
	/*'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',*/
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
	'admin'=>'Admin/admin',
	'member'=>'Index/member',
	'article/:id\d'=>'Index/article',
	'article'=>'Index/article',
	'yjfx'=>'Index/yjfx',
	'news'=>'Admin/news',
	'news_add'=>'Admin/add',
	'news_delete/:del'=>'Admin/delete',
	'admin_member'=>'Member/member',
	'member_show'=>'Member/show',
	'member_add'=>'Member/add',
	'member_delete/:del'=>'Member/delete',
	'admin_newsImage'=>'NewsImage/newsImage',
	'newsImage_show'=>'NewsImage/show',
	'newsImage_delete/:del'=>'NewsImage/delete',
	'admin_memberImage'=>'MemberImage/memberImage',
	'memberImage_show'=>'MemberImage/show',
	'memberImage_delete/:del'=>'MemberImage/delete',
	'upload'=>'NewsImage/addimage',
	),
);
<?php

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'redis' => [
			'class' => 'yii\redis\Connection',
			'hostname' => 'localhost',
			'port' => 6379,
			'database' => 0,
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,//隐藏index.php 
			'rules' => [],
		],
	],
	'timeZone'=>'PRC',	// 设置时区
	'defaultRoute' => 'index',
];

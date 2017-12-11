<?php	
	define('SMARTY_DIR','smarty_library/');
	require(SMARTY_DIR.'Smarty.class.php');

	include "smarty_library/smartyinit.php";

	$cssPath= get_bloginfo('stylesheet_url');
	$arr['menuTitles']= array( "Флора", "Фауна", "О сельве",'Главная');
	
	$smarty->assign('menuTitles', $arr['menuTitles']);
	$smarty->assign('cssPath', $cssPath);

	$smarty->display('header.tpl');?>


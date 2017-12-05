<?php	
	define('SMARTY_DIR','smarty_library/');
	require(SMARTY_DIR.'Smarty.class.php');

	include "smarty_library/smartyinit.php";

	$arr['menuTitles']= array( "Флора", "Фауна", "О сельве",'Главная');
	$smarty->assign('menuTitles', $arr['menuTitles']);

	$smarty->assign('mainText', $text);

	$smarty->display('header.tpl');?>


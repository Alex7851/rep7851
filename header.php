<?php	
define('SMARTY_DIR','smarty_library/');
require(SMARTY_DIR.'Smarty.class.php');

$smarty = new Smarty ();//обьект smarty

$str=dirname(__FILE__);
$path=str_replace("\\", "/", $str). "/";


$smarty->template_dir= $path . 'tpl/templates/';//указываем путь к шаблонам
$smarty->compile_dir= $path . 'tpl/templates_c/';
$smarty->config_dir=$path . 'tpl/configs/';
$smarty->cache_dir= $path . 'tpl/cache/';





$arr['menuTitles']= array( "Флора", "Фауна", "О сельве",'Главная');
$smarty->assign('menuTitles', $arr['menuTitles']);

$smarty->assign('mainText', $text);

$smarty->display('header.tpl');?>


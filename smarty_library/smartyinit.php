<?php	

	$smarty = new Smarty ();//обьект smarty

	$str=dirname(__FILE__);
	$pos= strripos($str, "\\");
	$str=substr($str, 0, $pos);
	$path=str_replace("\\", "/", $str). "/";
	
	$smarty->template_dir= $path . 'tpl/templates/';//указываем путь к шаблонам
	$smarty->compile_dir= $path . 'tpl/templates_c/';
	$smarty->config_dir=$path . 'tpl/configs/';
	$smarty->cache_dir= $path . 'tpl/cache/';

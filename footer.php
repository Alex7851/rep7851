<?php	
	include "smarty_library/smartyinit.php";

	$arr['footerPoints'] = array (
	 '1' => array('fi' => '©  АО Selva inc.', 'si' => "Restricted rights ", 'ti' => 'All rights reserved.', 'foi' => 'Обратная связь'),
	 '2' => array('fi' => 'РАЗДЕЛЫ', 'si' => 'Сельва', 'ti' => 'Флора', 'foi' => 'Фауна'), 
	 '3' => array('fi' => 'РЕКОМЕНДУЕМ', 'si' => 'Джунгли амазонии', 'ti' => 'Фильмы о сельве', 'foi' => 'Мнения ученых'),
	 '4' => array('fi' => 'ИНФОРМАЦИЯ', 'si' => 'Контакты', 'ti' => 'Редакция', 'foi' => 'Вакансии'));
	
	$smarty->assign('footerPoints',$arr['footerPoints']);

	$smarty->display('footer.tpl');	?>
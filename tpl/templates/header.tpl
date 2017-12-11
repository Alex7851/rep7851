<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{$cssPath}">
	<title>Document</title>
</head>
<body>
	<div class="menuwrapper">
		<p class="ttl clr">Этот сайт посвящен "легким" нашей планеты, 
		 без которых жизнь человечества невозможна</p>
		<p class="ttle">СЕЛЬВА</p>
		
		<li class="hide">
		Меню
			<ul> 
		 		{foreach from=$menuTitles item=itm}
				<a href=""><li class="menuitem"> {$itm}</li></a>
				{/foreach}
			</ul>
		</li>
	</div>
</body>

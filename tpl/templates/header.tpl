
<body>
	<div class="menuwrapper">


	<li class="hide">

	Меню<ul> 
 {foreach from=$menuTitles item=itm}
		<a href=""><li class="menuitem"> {$itm}</li></a>
		{/foreach}
		</ul>
	</li>


	

	</div>

{$mainText}

</body>
</html>
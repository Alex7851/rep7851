<body>
	<div class="footer">
		<ul class="ulstile">
		{foreach from=$footerPoints item=itm}
			<li class="listyle">
				<a href="">{$itm.fi}</a><br><br>
				<a href="">{$itm.si}</a><br>
				<a href="">{$itm.ti}</a><br>
				<a href="">{$itm.foi}</a><br>
			</li>
		{/foreach}
		</ul>
 	</div>
</body>
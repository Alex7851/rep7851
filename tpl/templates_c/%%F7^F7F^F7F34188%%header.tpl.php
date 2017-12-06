<?php /* Smarty version 2.6.20, created on 2017-12-06 06:04:39
         compiled from header.tpl */ ?>

<body>
	<div class="menuwrapper">
		<p class="ttl clr">Этот сайт посвящен "легким" нашей планеты, 
		 без которой жизнь человечества невозможна</p>
		<p class="ttle">СЕЛЬВА</p>
		
		<li class="hide">
		Меню
			<ul> 
		 		<?php $_from = $this->_tpl_vars['menuTitles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
				<a href=""><li class="menuitem"> <?php echo $this->_tpl_vars['itm']; ?>
</li></a>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>
	</div>

</body>
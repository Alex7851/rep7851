<?php /* Smarty version 2.6.20, created on 2017-12-04 22:14:54
         compiled from footer.tpl */ ?>
<body>
	<div class="footer">
		<ul class="ulstile">
		<?php $_from = $this->_tpl_vars['footerPoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
			<li class="listyle">
				<a href=""><?php echo $this->_tpl_vars['itm']['fi']; ?>
</a><br>
				<a href=""><?php echo $this->_tpl_vars['itm']['si']; ?>
</a><br>
				<a href=""><?php echo $this->_tpl_vars['itm']['ti']; ?>
</a><br>
				<a href=""><?php echo $this->_tpl_vars['itm']['foi']; ?>
</a><br>
			</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
 	</div>
</body>
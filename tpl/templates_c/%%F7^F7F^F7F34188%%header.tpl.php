<?php /* Smarty version 2.6.20, created on 2017-12-04 20:02:05
         compiled from header.tpl */ ?>

<body>
	<div class="menuwrapper">


	<li class="hide">

	Меню<ul> 
 <?php $_from = $this->_tpl_vars['menuTitles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
		<a href=""><li class="menuitem"> <?php echo $this->_tpl_vars['itm']; ?>
</li></a>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	</li>


	

	</div>

<?php echo $this->_tpl_vars['mainText']; ?>


</body>
</html>
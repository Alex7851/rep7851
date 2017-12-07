<body>
<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 content-area">
			<main id="main" class="site-main">
				<div class="article-grid-container">
		{php}
			$pathDir= str_replace("\\", "/", get_template_directory()) . "/mainIndex.php";
			include($pathDir);
		{/php}
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!--row-->      

</div><!--.container-->
</body>
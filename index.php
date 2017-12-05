<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php	bloginfo('stylesheet_url')	?>">
	<title>Document</title>
</head>
<body>

	<?php	get_header();?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 content-area">
			<main id="main" class="site-main">


				<div class="article-grid-container">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							$post_display_option = get_theme_mod('post_display_option','post-excerpt');

							if($post_display_option == 'post-excerpt'){
								get_template_part( 'template-parts/content','page');
							}
							else{
								get_template_part( 'template-parts/content','page');
							}

							?>

						<?php endwhile; ?>

						

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!--row-->      

</div><!--.container-->



	<?php	get_footer();
	?>	
</body>
</html>



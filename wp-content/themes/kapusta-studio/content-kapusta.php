<section id="kapusta-studio" class="studio">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class("studio"); ?>>
			<div class="text">
				<h1><?php the_title(); ?></h1>
				<img class="icon" src="<?php the_field('icons') ?>" alt="<?php the_field('description') ?>">
				<blockquote><?php the_field('description') ?></blockquote>
				<?php the_content(); ?>
				<a href="#contacts" class="button">Заказать епта!</a>
			</div>
			<a href="" class="imo"><img class="imo" src="<?php bloginfo('template_url')?>/images/cap.png" alt="cайт запили!"></a>
		</article>
	</div>
</section>
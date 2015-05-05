<?php
 $args = array(
 'post_type'=>'figure',
 'posts_per_page'=>9,
 'order'=>'ASC'
 );
 $query4=new WP_Query($args);
 ?>
<section id="portfolio" class="triple">
	<div class="container-portfolio">
<?php while ( $query4->have_posts() ) : $query4->the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<figure class="triple">
			<p><?php the_post_thumbnail(); ?></p>
			<blockquote class="port"><?php the_title() ?></blockquote>
			<figcaption><?php the_field('description') ?></figcaption>
		</figure>
	</article>

<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
</section>
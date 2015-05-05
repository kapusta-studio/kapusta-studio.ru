<?php
 $args = array(
 'post_type'=>'service',
 'posts_per_page'=>4,
 'order'=>'ASC'
 );
 $query2=new WP_Query($args);
 ?>
<section id="uslugi" class="triple">
	<div class="container-uslugi">
<?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class("triple"); ?>>
			<div class="text">
				<h1><?php the_field('dashicon') ?><?php the_title(); ?></h1>
				<blockquote><?php the_field('description') ?></blockquote>
				<?php the_content(); ?>
			</div>
		</article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
</section>
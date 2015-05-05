<?php get_header();?>

<?php get_sidebar();?>

<?php
 $args = array(
 'post_type'=>'page',
 'order'=>'ASC'
 );
 $query=new WP_Query($args);
 ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<?php
if($post->ID == 1703){get_template_part('content','kapusta');}
elseif ($post->ID == 1720){get_template_part('content','uslugi');}
elseif ($post->ID == 1725){get_template_part('content','resh');}
elseif ($post->ID == 1727){get_template_part('content','portfolio');}
elseif ($post->ID == 1729){get_template_part('content','contacts');}
?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer();?>
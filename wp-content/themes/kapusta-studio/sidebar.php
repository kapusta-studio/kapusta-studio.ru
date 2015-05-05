<aside>
	<div class="logo">
	    <a href="#kapusta-studio"><img src="<?php bloginfo('template_url')?>/images/sklogo-site2.png" alt="kapusta-studio"></a>
	</div>
<?php 
wp_nav_menu( array(
    'menu'=>'vmenu',
 'container' => 'nav',
 'menu_class' => 'vmenu',
 'echo' => true,
 'before' => '',
 'after' => '',
 'link_before' => '<div class="navicon"></div>',
 'link_after' => '',
 'depth' => 0,
 'walker'=>new description_Walker())
 );
?>
	
	<address>Телефон: 8(903)297-64-97<br>e-mail: superkapusta@inbox.ru</address>
	
	<div class="socialbuttons">
		<a href="https://vk.com/id2152145"><img src="<?php bloginfo('template_url')?>/images/vk.png" alt="vkontakte"></a>
		<a href="https://www.facebook.com/vyacheslav.zaboev"><img src="<?php bloginfo('template_url')?>/images/f.png" alt="facebook"></a>
		<a href="https://twitter.com/?refsrc=email"><img src="<?php bloginfo('template_url')?>/images/tw.png" alt="twitter"></a>
		<a href="http://www.youtube.com/channel/UCJxWd2uBy28CXJGC0VmskVA"><img src="<?php bloginfo('template_url')?>/images/yt.png" alt="youtube"></a>
    </div>
	
    <div class="autor">Веб-студия "Капуста"</div>
	
</aside>
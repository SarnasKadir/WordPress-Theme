<p><h1>most basic WordPress theme</h1></p>

<!-- from the WP dashboard in appearance in MENU this menu must be asigned otherwise it will displays all menus -->
<?php wp_nav_menu( array('theme_location' => 'top_bannerNavs','container' => false, 'reverse' => false,));?>
<?php
if (have_posts()) :
while ( have_posts() ) : the_post();
?>
<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
<?php the_content(); ?>
<?php
endwhile;
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
 
?> 
 
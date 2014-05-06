<?php get_header(); ?>
<div id="layout" class="pure-g">
 <?php get_sidebar(); ?>

    <div class="content pure-u-1 pure-u-med-3-4">
        <div>
<h1>Category:<?php single_cat_title();?></h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
     <?php get_template_part( 'content', 'cat' ); ?>
<?php endwhile; else: ?>
	<p>There are no posts or pages</p>
	<?php endif; ?>	
<?php get_footer(); ?>
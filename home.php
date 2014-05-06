<?php get_header(); ?>
<div id="layout" class="pure-g">
 <?php get_sidebar(); ?>

    <div class="content pure-u-1 pure-u-med-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
       <?php get_template_part('content','pinned' ); ?>

     <?php get_template_part( 'content', 'blog' ); ?>

<?php get_footer(); ?>

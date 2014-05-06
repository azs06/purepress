<?php 
$sticky = get_option( 'sticky_posts' );
$args = array(
'posts_per_page' => 1,
'post__in'  => $sticky,
'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args );

if ( $sticky[0] ):
?>
<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> 
<div class="posts">
<h1 class="content-subhead">Pinned Post</h1>

<!-- A single blog post -->
<section class="post">
<header class="post-header">
    <h2 class="post-title"><?php the_title(); ?></h2>
    <p class="post-meta">
        By <a href="#" class="post-author"><?php the_author(); ?></a> under <?php the_category(','); ?>
    </p>
</header>

<div class="post-description">
 <?php the_excerpt(); ?>
</div>
<a class="pure-button pure-button-primary" href="<?php the_permalink(); ?>">Read More</a>
</section>
<?php endwhile; endif; ?>
</div>
<?php endif; ?>
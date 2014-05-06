       <?php $query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) ); ?>
       <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>
<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?php the_title(); ?></h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#"><?php the_author(); ?></a> under <?php the_category(',' ); ?>
                        </p>
                    </header>

                    <div class="post-description">
                  <?php the_excerpt(); ?>
                    </div>
                    <a class="pure-button pure-button-primary" href="<?php the_permalink(); ?>">Read More</a>
                </section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>                
            </div>
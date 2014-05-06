       <div class="posts">
                
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?php the_title(); ?></h2>

                        
                    </header>

                    <div class="post-description">
                  <?php the_content(); ?>
                    </div>
                </section>
<h2>Comments</h2>
<?php comments_template('',true ); ?>
                
<?php endwhile; endif; ?>
                
            </div>
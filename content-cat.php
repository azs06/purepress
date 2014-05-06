       <div class="posts">
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?php the_title(); ?></h2>

                     
                    </header>

                    <div class="post-description">
                  <?php the_excerpt(); ?>
                    </div>
                    <a class="pure-button pure-button-primary" href="<?php the_permalink(); ?>">Read More</a>
                </section>         
            </div>
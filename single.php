<?php get_header(); ?>

            <section>
                <div id="content" role="main">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article>
                            <h1><?php the_title(); ?></h1> 
                            <?php the_content(); ?>
                            <p class="time-stamp">Originally posted: <?php the_time('F j, Y'); ?></p>
                        </article>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this post does not exist.'); ?></p>
                    <?php endif; ?>

                    <nav>
                        <div class="nav-page">
                             <div class="nav-prev"><?php previous_post_link('Next :: %link &raquo;'); ?></div>
                             <div class="nav-next"><?php next_post_link('&laquo; Previous :: %link'); ?></div>
                       </div>
                    </nav>
                </div>
            </section>


<?php get_footer(); ?>
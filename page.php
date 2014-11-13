<?php get_header(); ?>

            <section>
                <div id="content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article>
                            <header>
                                <h1><?php the_title(); ?></h1> 
                            </header>
                        </article>
                        <?php the_content(); ?>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
            </section>


<?php get_footer(); ?>
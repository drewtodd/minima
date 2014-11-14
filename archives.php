<?php 
/*
Template Name: Archives
*/
get_header(); ?>

            <section>
                <div id="content" role="main">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article>
                            <h1><?php the_title(); ?></h1> 
                            <?php the_content(); ?>

                            <h2>Contents of this site</h2>
                            <ul>
                                <?php wp_get_archives('type=postbypost'); ?>
                            </ul>
                        </article>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
            </section>


<?php get_footer(); ?>
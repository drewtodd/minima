<?php 
/*
Template Name: Archives
*/
get_header(); ?>

            <section>
                <div id="content" role="main">
                    <!-- main loop -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article>
                            <h1><?php the_title(); ?></h1> 
                            <?php the_content(); ?>

                            <h2>Contents of this site</h2>
                            <!--<ul>
                                <?php wp_get_archives('type=postbypost'); ?>
                            </ul>-->
                        </article>
    
                        <?php endwhile; ?>

                        <!-- new loop -->

                        <?php $posts = new WP_Query( array ( 'orderby' => 'date', 'order' => 'DESC') ); ?>
                        <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <?php echo '<h3>' . get_the_title() . '</h3>'; ?>
                        <?php echo '<p>' . get_the_excerpt() . '</h3>'; ?>
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                    <?php else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
            </section>


<?php get_footer(); ?>
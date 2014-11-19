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
    
                        <?php endwhile; wp_reset_postdata(); ?>

                        <!-- new loop -->

                        <?php $posts = new WP_Query( array ( 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 10) ); ?>
                        <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <?php echo '<h3 id="' . $post->post_name . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>'; ?>
                        <?php echo '<p>' . get_the_excerpt() . '</p>'; ?>
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                        <nav>
                            <div class="navpage">
                                 <div class="nav-prev"><?php previous_posts_link(); ?></div>
                                 <div class="nav-next"><?php next_posts_link(); ?></div>
                           </div>
                        </nav>


                    <?php else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
            </section>


<?php get_footer(); ?>
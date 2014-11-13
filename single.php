<?php get_header(); ?>

            <section>
                <div id="content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article>
                            <header>
                                <h1><?php the_title(); ?></h1> 
                            </header>    
                            <?php the_content(); ?>
                            <p class="time-stamp">Originally posted: <?php the_time('F j, Y'); ?></p>
                        </article>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this post does not exist.'); ?></p>
                    <?php endif; ?>

                    <nav>
                        <div class="navpage">
                             <div class="nav-prev">&lt; Previous entry</div>
                             <div class="nav-next">Next entry &gt;</div>
                       </div>
                    </nav>
                </div>
            </section>


<?php get_footer(); ?>
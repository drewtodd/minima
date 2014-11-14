<?php get_header(); ?>

			<section>
                <div id="content" role="main">
    				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    					<article>
                            <header>
                                <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>	
                            </header>
        					<?php the_content(); ?>
                        </article>

    				<?php endwhile; else: ?>
    					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    				<?php endif; ?>

                    <nav>
                        <div class="navpage">
                             <div class="nav-prev">&lt; Previous entry</div>
                       </div>
                   </nav>
    			</div>
            </section>


<?php get_footer(); ?>
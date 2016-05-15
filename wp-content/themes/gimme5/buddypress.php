<?php get_header(); ?>


				


	   			<!-- .main_content-->
                <div class="main_content grid">

	       			<!-- section content -->
		            <section class="content unit two-thirds">

		            		

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		                    <!-- standart article -->
		                    <article <?php post_class(); ?>>

		                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

		                    	

		                        <!-- entry-content -->
		                        <div class="entry-content clearfix">
									<?php
										 the_content();
									?>

	                            </div>
	                            <!-- entry-content -->

		                    </article>
		                    <!-- standart article -->

		                    <?php endwhile; ?>

		                    <!-- begin #pagination -->
							<?php if (function_exists("emm_paginate")) {
									emm_paginate();
							} else { ?>

							<div class="navigation">
						        <div class="alignleft"><?php next_posts_link(__('Older','site5framework')) ?></div>
						        <div class="alignright"><?php previous_posts_link(__('Newer','site5framework')) ?></div>
						    </div>

					   		<?php } ?>
					    	<!-- end #pagination -->

	                </section>
	                <!-- section content -->

			<?php endif;?>

			<?php wp_reset_query(); ?>

			<?php get_sidebar(); ?>

        </div>
        <!-- .main_content-->

<?php get_footer(); ?>
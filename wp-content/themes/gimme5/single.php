<?php get_header(); ?>


				


	   			<!-- .main_content-->
                <div class="main_content grid">

	       			<!-- section content -->
		            <section class="content unit two-thirds">

		            	

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		                    <!-- standart article -->
		                    <article <?php post_class(); ?>>
								
								<?php
                                	$format = get_post_format();
									if ( false === $format )
									    $format = 'standard';
								?>

								<!-- begin post icon -->
								<div class="icon">

									<?php
										if(has_post_format('gallery')){
											echo '<i class="fa fa-picture-o"></i>';
										}

										if(has_post_format('image')){
											echo '<i class="fa fa-camera"></i>';
										}

										if(has_post_format('link')){
											echo '<i class="fa fa-link"></i>';
										}

										if(has_post_format('quote')){
											echo '<i class="fa fa-quote-right"></i>';
										}

										if(has_post_format('video')){
											echo '<i class="fa fa-film"></i>';
										}

										if(has_post_format('audio')){
											echo '<i class="fa fa-music"></i>';
										}
									?>

									<?php
										if(!has_post_format('gallery') && !has_post_format('image') && !has_post_format('link') && !has_post_format('quote') && !has_post_format('video') && !has_post_format('audio')){
											echo '<i class="fa fa-pencil"></i>';
										}
									?>

								</div>
								<!-- end post icon -->


		                        <h2><?php the_title();?></h2>

		                    	<!-- postmeta -->
		                    	<div class="postmeta">
		                        	<span><i class="fa fa-clock-o"></i> <?php the_time('M j, Y') ?></span>
		                        	<span><i class="fa fa-user"></i> Posted by <?php the_author_link(); ?></span>
		                        	<span><i class="fa fa-bookmark"></i> <?php the_category(', '); ?></span>
		                        	<span><i class="fa fa-comments"></i> <?php comments_popup_link('0 comments', '1 comment', ' % comments'); ?></span>
		                        </div>
		                        <!-- postmeta -->

		                        <!-- entry-content -->
		                        <div class="entry-content clearfix">
											<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail( 'single-post-thumbnail' );
											}
											else {
											}
											?>

										<?php if(has_post_format('audio')){
											wp_enqueue_script('jplayer-js');
											$postid = $post->ID;
											player_audio($postid);
										}?>

										<?php
										if(is_search()){
											the_excerpt();
										}else{
										 the_content(__('Read More', 'site5framework'));
										}?>

	                            </div>
	                            <!-- entry-content -->

		                    </article>
		                    <!-- standart article -->

		                    <?php comments_template(); ?>

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
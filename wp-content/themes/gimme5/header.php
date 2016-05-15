<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- begin head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<!-- begin meta -->
	<meta name="viewport" content="width=device-width">
	<?php if (of_get_option('meta') == '1'){?>
<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
	<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />
	<?php }else {?>
	<?php }?><!-- end meta -->

	<!-- main stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<!-- main stylesheet -->


<!--//################################# Begin Custom Typography #################################//-->
<?php if(of_get_option('customtypography') == '1') { ?>
<?php if(of_get_option('headingfontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('headingfontlink')));?>
<?php } ?>

<?php if(of_get_option('bodyfontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('bodyfontlink')));?>
<?php } ?>

<?php if(of_get_option('logofontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('logofontlink')));?>
<?php } ?>
<?php load_template( get_template_directory() . '/custom.typography.css.php' );?>

<?php } ?>
<!--//################################# End Custom Typography #################################//-->

<!--//################################# Begin Custom Colors #################################//-->
<?php load_template( get_template_directory() . '/custom.colors.css.php' );?>

<!--//################################# End Custom Colors #################################//-->

<!-- begin wp_head -->
<?php wp_head(); ?>
<!-- end wp_head -->

</head>
<!-- end head -->

	<body <?php body_class(); ?> <?php if(of_get_option('layout') != 'left' && of_get_option('layout') != ''):?>id="right-sidebar"<?php endif;?>>

		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="top-bar">
			<div class="grid">
				<div class="top-bar-links unit one-third">
					<?php 
						global $current_user; 
						get_currentuserinfo();
						if ( is_user_logged_in() ) {							
						?>	
							<span>Welcome <?php echo $current_user->display_name; ?>!</span>
						    <a href="<?php echo wp_logout_url(); ?>" title="Logout"><i class="fa fa-unlock fa-lg"></i> Logout</a>

						<?php
						} else { ?>
						    <a href="<?php echo wp_login_url(); ?>" title="Login"><i class="fa fa-lock fa-lg"></i> Login</a> &nbsp; &nbsp;

						    <a href="<?php echo wp_registration_url(); ?>" title="Register"><i class="fa fa-plus-circle fa-lg"></i> Register</a>
						<?php } 

					?>
				</div>
				<!-- social stuff -->
			    <div class="top-bar-social unit two-thirds">

			    		<span><?php _e('Get Social') ?></span>

			            <?php if(of_get_option('contact_email')!=""){ ?>
			            	<a href="mailto:<?php echo antispambot(of_get_option('contact_email'),1);?>"><i class="fa fa-envelope fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('twitter')!=""){ ?>
			            	<a href="http://twitter.com/<?php echo of_get_option('twitter');?>" ><i class="fa fa-twitter fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('dribbble')!=""){ ?>
			            	<a href="<?php echo of_get_option('dribbble');?>"><i class="fa fa-dribbble fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('facebook')!=""){ ?>
			            	<a href="<?php echo of_get_option('facebook');?>"><i class="fa fa-facebook-square fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('googleplus')!=""){ ?>
			            	<a href="<?php echo of_get_option('googleplus');?>"><i class="fa fa-google-plus fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('vimeo')!=""){ ?>
			            	<a href="<?php echo of_get_option('vimeo');?>"><i class="fa fa-vimeo-square fa-lg"></i></a>
			            <?php } ?>

			             <?php if(of_get_option('linkedin')!=""){ ?>
			            	<a href="<?php echo of_get_option('linkedin');?>"><i class="fa fa-linkedin fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('google')!=""){ ?>
			            	<a href="<?php echo of_get_option('google');?>"><i class="fa fa-vimeo-square fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('github')!=""){ ?>
			            	<a href="<?php echo of_get_option('github');?>"><i class="fa fa-github fa-lg"></i></a>
			            <?php } ?>

			            <?php if(of_get_option('extrss')!=""){ ?>
			            	<a href="<?php echo of_get_option('extrss'); ?>"><i class="fa fa-rss fa-lg"></i></a>
			            	<?php } elseif(of_get_option('rss')== 1)  { ?>
			            	<a href="<?php bloginfo('rss2_url'); ?>"><i class="fa fa-rss fa-lg"></i></a>
			            <?php } ?>
			    </div>
			    <!-- end social stuff -->
			</div><!-- end .wrapper -->
		</div><!-- end .top-bar -->

		<div id="main-navigation">
			<div class="grid">
				<div class="top-menu unit two-thirds">
	           		<!-- begin main navigation -->
	           		<div id="mobnav-btn"><?php _e('Menu') ?></div>
	                <?php if ( has_nav_menu( 'main_nav' ) ) {?>
	                	<?php  site5_main_nav(false, 'sf-menu'); ?>
	              	<?php }?>
	                <!-- end main navigation -->&nbsp;
				</div>						
				
				<div class="top-search unit one-third">
	                <!-- begin search form -->
	                	<?php get_search_form(); ?>
	            	<!-- end search form -->
	        	</div>
	    	</div>
	    </div><!-- // end main-navigation -->

		<div class="main-container">

		
				<!-- begin header -->
				<header class="clearfix">

					

					<div class="header-logo grid">
						<div class="unit">
							<!-- begin logo -->
							<h1 <?php if(of_get_option('image_logo') != 1){?>class="textlogo"<?php }else{?>class="logo"<?php }?> title="<?php  echo get_bloginfo('name');?>">
								<a href="<?php bloginfo('url');?>">

			                    <?php if(of_get_option('image_logo') != 1){?>

			                        <?php if(of_get_option('logo_text')) : echo of_get_option('logo_text'); endif;?>

			                        <?php }else{?>

		                            <?php if(of_get_option('logo')) : echo '<img src="'.of_get_option('logo').'" alt="'.get_bloginfo('name').'" class="styled"/>'; endif;?>
								<?php }?>

		                    	</a>
							</h1>
							<h2 class="description"><?php  echo get_bloginfo('description');?></h2>
							<!-- end logo -->
						</div>
					</div>


	            </header>
	            <!-- end header -->


        <!-- begin main -->
        <div class="main clearfix">
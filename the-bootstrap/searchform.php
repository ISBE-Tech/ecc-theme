	<?php
	/** header.php
	 *
	 * Displays all of the <head> section and everything up till </header>
	 *
	 * @author		Konstantin Obenland
	 * @package		The Bootstrap
	 * @since		1.0 - 05.02.2012
	 */

	?>
	<!DOCTYPE html>
	<html class="no-js" <?php language_attributes(); ?>>
		<head>
			<?php tha_head_top(); ?>
			<link rel="profile" href="http://gmpg.org/xfn/11" />
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			
			<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
			
			<?php tha_head_bottom(); ?>
			<?php wp_head(); ?>
			<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/style.css?v=1" type="text/css" media="all">
			<style type="text/css">
				body{
					background: none;
				}
				
				body > .container{
					margin: auto;
				}
				
				[class*="span"]{
					margin: 0;
				}
				
				#page{
					margin: 0px;
					padding: 10 0 10px;
				}
				
				#red-line{
					width: 100%;
					height: 7px;
					background: #CE472A;
					margin: 4px 0 4px 0;
				}
			
				.top-nav{
					width: 100%;
					height: auto;
					padding-bottom: 25px;
				}
				
				.navbar .nav{
					margin: 0;
				}
				
				.navbar .nav li{
					height: auto;
					display: inline;
					margin: auto 0;
				}
				
				.navbar .nav > li > a{
					font-size: 20px;
				}
				
				.navbar-inner{
					min-height: 0;
					padding: 0;
				}
				
				.navbar .container{
					width: 100%;
					height: 40px;
					background: #798fc2;
				}
				
				#menu-main-menu{
					position: relative;
					left: -50px;
					top: -10px;
					float: right;
					width: auto;
					margin: auto 0;
					height: auto;
				}
				
				#headline{
					margin: 0 0 0 0px;
					float: right;
					width: auto;
				}
				
				#left-col{
					clear:both;
				}
				
				#right-col{
					float: right;
				}
				
				#headline ul{
					list-style: none;
					text-align: right;
				}
				
				#headline li{
					display: inline;
				}
				
				#head-top{
					height: auto;
				}
				
				#page-title{
					float: right;
					width: 80%;
					position: relative;
					right: 0px;
					bottom: 65px;
					font-size: 30px;
				}
				
				#searchform{
					float: right;
					margin: 0;
					width: auto;
				}
				
				input[type="search"]{
					margin: 0;
					float: right;
				}
			</style>
			<!--[if lte IE 7]>
	<style>
		div#mainwrap {
			overflow: hidden;
		}
		div#left-col {
			vertical-align: top;
			display: inline;
			zoom:1;
			padding-bottom: 9999px;
			margin-bottom: -9999px;
		}
	</style>
	<![endif]-->
		</head>
		
		<body <?php body_class(); ?>>
			<div class="container">
				<div id="page" class="clearfix hfeed row">
					<?php tha_header_before(); ?>
					
					
	<div class="top-nav span12">
		<div id	="head-top">
			<a href="/"><img src="<?php bloginfo( 'template_url' ); ?>/images/left-logo.png" height="125px" alt=""/></a>
			<div id="headline">
				<ul>
					<li><a href="http://evchamber.chambermaster.com/login">Member Only Login</a> | </li>
					<li><a href="/wp-content/uploads/ecc.pdf" target="_blank">Member Benefits</a> | </li>
					<li><a href="http://evchamber.chambermaster.com/member/newmemberapp/">Join the Chamber</a> | </li>
					<li><a href="http://evchamber.chambermaster.com/login">Member Center</a> | </li>
					<li><a href="http://evchamber.chambermaster.com/Feed/rss/NewMembers.rss">Welcome New Members</a></li>
				</ul>
			</div>
			
			<div id="page-title">
				<b>Evanston</b> Chamber of Commerce
				<!--<form method="get" id="searchform" class="sb-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input id="s" class="sb-search-box" type="search" name="s" placeholder="Search">
				<button class="btn" name="submit" id="sb-search-button" type="submit"><?php _e( 'Search', 'the-bootstrap' ); ?></button>
				</form>-->
			</div>
			
			<div id="red-line"></div>
			
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'the-bootstrap' ); ?></h3>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'the-bootstrap' ); ?>"><?php _e( 'Skip to primary content', 'the-bootstrap' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'the-bootstrap' ); ?>"><?php _e( 'Skip to secondary content', 'the-bootstrap' ); ?></a></div>
				<?php if ( has_nav_menu( 'primary' ) OR the_bootstrap_options()->navbar_site_name OR the_bootstrap_options()->navbar_searchform ) : ?>
				<div <?php the_bootstrap_navbar_class(); ?>>
					<div class="navbar-inner">
						<div class="container">
							<!-- .btn-navbar is used as the toggle for collapsed navbar content
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								MENU
							</a> -->
							<?php if ( the_bootstrap_options()->navbar_site_name ) : ?>
							<span class="brand"><?php bloginfo( 'name' ); ?></span>
							<?php endif;?>
							<div class="nav-collapse" style="height:auto!important;">
								<?php wp_nav_menu( array(
									'theme_location'	=>	'primary',
									'menu_class'		=>	'nav',
									'depth'				=>	3,
									'fallback_cb'		=>	false,
									'walker'			=>	new The_Bootstrap_Nav_Walker,
								) ); 
								 ?>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</nav><!-- #access -->  
		</div>
	</div>
					
				 <div id="left-col" class="clearfix span3">

	 <a href="http://evchamber.chambermaster.com/contact" class="contact-pill">Contact Info</a>
		 
		<a href="http://evchamber.chambermaster.com/list"><img src="<?php bloginfo( 'template_url' ); ?>/images/find-a-business.png" alt="" class="left-button" /></a>
		
		<a href="http://evchamber.chambermaster.com/jobs/category"><img src="<?php bloginfo( 'template_url' ); ?>/images/find-a-job.png" alt="" class="left-button"  /></a>
		
		<a href="http://evchamber.chambermaster.com/hotdeals"><img src="<?php bloginfo( 'template_url' ); ?>/images/incredible-offers.png" alt="" /></a>
		
		<a href="http://evchamber.chambermaster.com/news" class="news-pill">News Releases</a>

		<div class="left-icons">

			<p><a href="http://evchamber.chambermaster.com/contact" class="contact-information">Follow Us</a></p>
			<a href="http://www.facebook.com/home.php?ref=home#/pages/Evanston-IL/Evanston-Chamber-of-Commerce/203113165544"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook.png" alt="" class="left-icon" /></a>
			
			<a href="http://www.linkedin.com/groups?home=&gid=1951748&trk=anet_ug_hm&goback=.gdr_1249421652850_1"><img src="<?php bloginfo( 'template_url' ); ?>/images/linkedin.png" alt="" class="left-icon" /></a>
					
			<a href="http://twitter.com/EvanstonChamber"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter.png" alt="" class="left-icon last" /></a>
			
		</div>
	   
	   
		
	</div>

	<div id="right-col" class="span9 clearfix">
						


					
						<?php tha_header_bottom(); ?>
					</header><!-- #branding --><?php
					tha_header_after();
					

	/* End of file header.php */
	/* Location: ./wp-content/themes/the-bootstrap/header.php */
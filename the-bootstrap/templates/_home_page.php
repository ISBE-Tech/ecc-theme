<?php

/** _home_page.php

 *

 * Template Name: Home Page
 *

 * @author 	Konstantin Obenland

 * @package The Bootstrap

 * @since	1.3.0	- 29.04.2012

 */



get_header(); ?>



<div id="primary">
	<div id="top-home-graphic">
		<div><a href="<?php echo the_field('home_image_1_link'); ?>"><img src="<?php echo the_field('home_image_1'); ?>" class="home-img" /></a></div>
		<div><a href="<?php echo the_field('home_image_2_link'); ?>"><img src="<?php echo the_field('home_image_2'); ?>" class="home-img" /></a></div>
		<div><a href="<?php echo the_field('home_image_3_link'); ?>"><img src="<?php echo the_field('home_image_3'); ?>" class="home-img" /></a></div>
	</div>

			<div id="content" class="span7" role="main">



				<?php while ( have_posts() ) : the_post(); ?>



		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php tha_entry_top(); ?>

	

	<header class="page-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

	</header><!-- .entry-header -->



	<div class="entry-content clearfix">

		<?php

		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'the-bootstrap' ) );

		the_bootstrap_link_pages(); ?>

	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'the-bootstrap' ), '<footer class="entry-meta"><span class="edit-link label">', '</span></footer>' );

	

	tha_entry_bottom(); ?>

</article><!-- #post-<?php the_ID(); ?> -->



			<?php endwhile; // end of the loop. ?>



			</div><!-- #content -->
            
             <div id="content-right" class="span3">
           <h3>Upcoming Evanston Chamber Events</h3>
           <div id="mni-widgets-1363647704087"></div>
<script type="text/javascript">
//<![CDATA[
var _mniwq=_mniwq||[];
_mniwq.push(["1363647704087.type","events_upcoming"],["1363647704087.category",6],["1363647704087.limit",5],["1363647704087.marquee",false],["1363647704087.showEndDate",false],["1363647704087.showLocation",false],["1363647704087.showLinks",true],["1363647704087.popUp",true],["1363647704087.dateFormat","MMM d"],["1363647704087.styleTemplate","#@id .mn-scroll-container{font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:100%;margin:8px;position:relative}\n#@id .mn-scroll-item{-moz-border-radius:5px;-webkit-border-radius:5px;background-clip:padding-box;background-color:#FFFFFF;border-radius:5px;color:#798FC2;margin:0 0 4px;position:relative}\n#@id .mn-scroll-item{background-image:-webkit-gradient(linear,lefttop,leftbottom,from(#ffffff),to(#FFFFFF));background-image:-webkit-linear-gradient(top,#ffffff,#FFFFFF);background-image:-moz-linear-gradient(top,#ffffff,#FFFFFF);background-image:-ms-linear-gradient(top,#ffffff,#FFFFFF);background-image:-o-linear-gradient(top,#ffffff,#FFFFFF);background-image:linear-gradient(top,#ffffff,#FFFFFF)}\n#@id .mn-scroll-item:hover{background-color:#FFFFFF;color:#798FC2}#@id .mn-scroll-item:hover{background-image:-webkit-gradient(linear,lefttop,leftbottom,from(#ffffff),to(#FFFFFF));background-image:-webkit-linear-gradient(top,#ffffff,#FFFFFF);background-image:-moz-linear-gradient(top,#ffffff,#FFFFFF);background-image:-ms-linear-gradient(top,#ffffff,#FFFFFF);background-image:-o-linear-gradient(top,#ffffff,#FFFFFF);background-image:linear-gradient(top,#ffffff,#FFFFFF)}\n#@id .mn-scroll-name,#@id .mn-scroll-teaser{display:block;padding:2px 3px 2px 58px;position:relative}#@id .mn-scroll-link{color:inherit;text-decoration:none}\n#@id .mn-scroll-link:hover{text-decoration:underline}\n#@id .mn-scroll-date{font-size:75%;font-weight:700;left:3px;position:absolute;text-align:center;top:5px;width:50px}\n"],["1363647704087.create","mni-widgets-1363647704087"]);
(function(b,d,a,c){b.getElementById(d)||(c=b.getElementsByTagName(a)[0],a=b.createElement(a),a.type="text/javascript",a.async=!0,a.src="http://evchamber.chambermaster.com/Content/Script/Widgets.js",c.parentNode.insertBefore(a,c))})(document,"mni-widgets-script","script");
//]]>
</script>
            </div>
            
            <div class="bottom-banner">
            <a href="http://www.northwestern.edu/" class="bottom-banners"><img src="<?php echo get_bloginfo('template_url'); ?>/images/northwestern.jpg" /></a>
            
                        <a href="http://www.firstbt.com/" class="bottom-banners"><img src="<?php echo get_bloginfo('template_url'); ?>/images/firstbank.jpg" /></a>
                        
                            <a href="http://presencehealth.org/stfrancis" class="bottom-banners"><img src="<?php echo get_bloginfo('template_url'); ?>/images/stfrancis.jpg" /></a>   
                            
                            <a href="http://www.rotary.org/" class="bottom-banners"><img src="<?php echo get_bloginfo('template_url'); ?>/images/rotary.gif" /></a>   
                            
            
            </div>
            

		</div><!-- #primary -->


<?php

get_footer();





/* End of file _full_width.php */

/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */
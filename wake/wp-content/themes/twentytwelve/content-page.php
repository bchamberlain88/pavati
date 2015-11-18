<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			
            <div class="footer-content">
                
            </div>

            <div class="footer-copyright">

                <div class="footer-content">
                    
                    Copyright &copy; <?php echo date("Y"); ?> Pavati. All rights reserved.
                    <nav class="footer-nav"><ul>
                        
                        <!-- <li><a class="footer-link" id="footer-press">Press</a></li>
                        <li><a class="footer-link" id="footer-events">Events</a></li> -->
                        <li><a class="footer-link" href="http://pavati.com/wake/about-pavati/" id="footer-faqs">FAQ's</a></li>
                        <li><a class="footer-link" id="footer-contact">Contact Us</a></li>
                        <li><a class="footer-link" href="http://www.pavatimarine.com" target="new"><img alt="Pavati Marine 100% aluminum drift boats" class="footer-hpi" src="http://pavati.com/wake/wp-content/uploads/2014/02/pavati-footer-logo.png" /></a></li>
                        <li><a class="footer-link" href="http://www.highwayproducts.com" target="new"><img alt="Highway Products Inc. truck tool boxes, flatbeds, aluminum service bodies, headache racks, and more!" class="footer-hpi" src="http://pavati.com/wake/wp-content/uploads/2014/02/hpi-footer-logo.png" /></a></li>

                    </ul></nav>

                </div>
        
            </div>

            <div class="scroll-up">TOP</div>

		</footer><!-- .entry-meta -->

	</article><!-- #post -->

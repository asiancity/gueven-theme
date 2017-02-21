<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gueven
 */

$phone 					= get_theme_mod( 'phone');
$phoneUrl				= str_replace( array('-', ' '), '', $phone);
$fax 						= get_theme_mod( 'fax' );

$address 				= get_theme_mod( 'address' );
$postcode				= get_theme_mod( 'postcode' );
$city						= get_theme_mod( 'city' );
$emailaddress		= get_theme_mod( 'mail' );
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bgc-1 bdc-1" role="contentinfo">
		<div class="information container">
			<div class="row">
				<div class="location col-md-4">
					<span class="fa fa-map-marker"></span>
					<a href="#">
					<?php echo $address ?><br />
					<?php echo $postcode ?> <?php echo $city ?>
					</a>
					<span><?php esc_html_e( 'Fax', 'gueven' ); ?> <?php echo $fax ?></span>
				</div>
				<div class="phone col-md-4">
					<span class="fa fa-phone"></span>
					<span><a href="tel:<?php echo $phoneUrl ?>"><?php echo $phone ?></a></span>
				</div>
				<div class="mail col-md-4"><span class="fa fa-envelope-o"></span><span><a href="mailto:<?php echo $emailaddress ?>"><?php echo $emailaddress ?></a></span></div>
			</div>
		</div>
    <div class="footer-widgets">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_id' => 'footer-menu', 'menu_class' => 'clearfix' ) ); ?>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

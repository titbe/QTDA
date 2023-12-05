<?php
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'admin_menu', 'ctravel_adven_lite_pros');
function ctravel_adven_lite_pros() {    	
	add_theme_page( esc_html__('ctravel adven lite Details', 'ctravel-adven-lite'), esc_html__('ctravel adven lite Details', 'ctravel-adven-lite'), 'edit_theme_options', 'ctravel_adven_lite_pro', 'ctravel_adven_lite_pro_details');   
} 

function ctravel_adven_lite_pro_details() { 	
?>
<div class="wrap">
	<h1><?php esc_html_e( 'CTravel Adven Lite', 'ctravel-adven-lite' ); ?></h1>
	
		<div>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/skin/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>" style=" width: 100%;"> 
		</div>
	
	<p><strong> <?php esc_html_e( 'Description: ', 'ctravel-adven-lite' ); ?></strong><?php esc_html_e( 'CTravel Adven Lite WordPress theme is used for all type of adventure business. It is bold, powerful, attractive and multipurpose travel. CTravel Adven Pro WordPress theme Adventure theme covers many business like Travel, Adventure, Bike adventure, Water adventure, Restaurant, Food Drink, Holiday, Travel Agencies, Hotels, Tour Operators, Airlines, Photographic Agencies, Environmental Organizations, Tourist Spot Presentation, Tourism Promotion, Photography, travel agency, tour planners, tour and tourist guides, travel and adventure blogs, travel magazines, tourist destination, tourist hotels and airline agencies and all the people related to tourism industry, summer camps, skating, adventure, sports, hiking, trekking, railing, rafting, games, fun, hunting, military, mountain climbing, skiing, surfing and other such adventure sports and all types of business.', 'ctravel-adven-lite' ); ?></p>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_THEMEURL ); ?>" target="_blank"><?php esc_html_e('Theme Url', 'ctravel-adven-lite'); ?></a>	
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_PROURL ); ?>" target="_blank"><?php esc_html_e('Pro Theme Url', 'ctravel-adven-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_PURCHASEURL ); ?>" target="_blank"><?php esc_html_e('Click To Purchase', 'ctravel-adven-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_PURCHASEURL ); ?>" target="_blank"><?php esc_html_e('Price: $39 Only', 'ctravel-adven-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_DOCURL ); ?>" target="_blank"><?php esc_html_e('Documentation', 'ctravel-adven-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_DEMOURL ); ?>" target="_blank"><?php esc_html_e('View Demo', 'ctravel-adven-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( ctravel_adven_lite_SUPPORTURL ); ?>" target="_blank"><?php esc_html_e('Support', 'ctravel-adven-lite'); ?></a>
 </div> 
</div>
<?php }?>
<?php
add_action('customize_register', 'ctravel_adven_lite_customize_register');
define('ctravel_adven_lite_PROURL', 'https://www.themescave.com/themes/wordpress-theme-travel-ctravel-adven-pro/');
define('ctravel_adven_lite_THEMEURL', 'https://www.themescave.com/themes/wordpress-theme-travel-free-ctravel-adven-lite/');
define('ctravel_adven_lite_DOCURL', 'https://www.themescave.com/documentation/ctravel-adven-pro/');
define('ctravel_adven_lite_DEMOURL', 'https://www.themescave.com/demo/ctravel-adven-pro/');
define('ctravel_adven_lite_SUPPORTURL', 'https://www.themescave.com/forums/forum/ctravel-adven-pro/');
define('ctravel_adven_lite_PURCHASEURL', 'https://www.themescave.com/themes/?add-to-cart=1091');
?>
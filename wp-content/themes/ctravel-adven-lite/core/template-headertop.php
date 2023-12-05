<a class="skip-link screen-reader-text" href="#content">
    <?php esc_attr_e('Skip to content', 'ctravel-adven-lite'); ?></a>
<section id="header">
    <header class="container">
        <div class="header_top row">      
            <!--header section start -->
            <div class="header_left headercommon">          
                <div class="logo">
                    <?php if (has_custom_logo()) { ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php ctravel_adven_lite_the_custom_logo(); ?></a>
                    <?php }if (display_header_text() == true) { ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <p><?php bloginfo('description'); ?></p>
                    <?php } ?>
                </div><!-- logo -->      
            </div><!--header_left-->
            <div class="header_right headercommon">
                <ul>
                    <?php if (get_theme_mod('ctravel_adven_lite_fb')) { ?>
                        <li><a title="<?php esc_attr_e('Facebook', 'ctravel-adven-lite'); ?>" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('ctravel_adven_lite_fb', '')); ?>"></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod('ctravel_adven_lite_twitter')) { ?>
                        <li><a title="<?php esc_attr_e('twitter', 'ctravel-adven-lite'); ?>" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('ctravel_adven_lite_twitter', '')); ?>"></a></li>
                    <?php } ?>
                    <?php if (get_theme_mod('ctravel_adven_lite_glplus')) { ?>
                        <li><a title="<?php esc_attr_e('googleplus', 'ctravel-adven-lite'); ?>" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url(get_theme_mod('ctravel_adven_lite_glplus', '')); ?>"></a></li>
                    <?php } ?>
                    <?php if (get_theme_mod('ctravel_adven_lite_in')) { ?>
                        <li><a title="<?php esc_attr_e('linkedin', 'ctravel-adven-lite'); ?>" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('ctravel_adven_lite_in', '')); ?>"></a></li>
                    <?php } ?>
                </ul>

                <div class="phone-email">
                    <ul>
                        <li>
                            <?php $ctravel_adven_lite_email = get_theme_mod('ctravel_adven_lite_email'); ?>
                            <?php if (!empty($ctravel_adven_lite_email)) { ?>
                                <span class="info headeremail"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:<?php echo esc_attr($ctravel_adven_lite_email); ?>"><?php echo esc_html(sanitize_email($ctravel_adven_lite_email)); ?></a></span>
                            <?php } ?>


                        </li>
                        <li>
                            <?php $ctravel_adven_lite_phone = get_theme_mod('ctravel_adven_lite_phone'); ?>
                            <?php if (!empty($ctravel_adven_lite_phone)) { ?>
                                <span class="info headerphone"><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:<?php echo esc_attr($ctravel_adven_lite_phone); ?>"><?php echo esc_html($ctravel_adven_lite_phone); ?></a></span>
                            <?php } ?>           
                        </li>
                    </ul>
                </div><!--phone-email-->        
                <div class="clear"></div> 

            </div>
            <!-- header section end -->     
            <div class="clear"></div>
        </div><!--header_top-->
        <div class="clear"></div>

    </header>
</section><!--header-->

<section id="main_navigation">
    <div class="container">
        <div class="main-navigation-inner mainwidth">
            <div class="toggle">
                <a class="togglemenu" href="#"><?php esc_html_e('Menu', 'ctravel-adven-lite'); ?></a>
                <div class="clear"></div>
            </div><!-- toggle --> 
            <div class="sitenav">
                <div class="nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary'
                    ));
                    ?>
                </div>
                <div class="clear"></div>
            </div><!-- site-nav -->
            <div class="clear"></div>
        </div><!--main-navigation-->
        <div class="clear"></div>
    </div><!--container-->
    <div class="clear"></div>
</section><!--main_navigation-->
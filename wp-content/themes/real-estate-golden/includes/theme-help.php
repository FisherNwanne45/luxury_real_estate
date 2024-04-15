<section class="layers-area-wrapper">
    <div class="layers-onboard-wrapper">

        <div class="layers-onboard-slider">
            <!-- STEP 1 -->
            <div class="layers-onboard-slide layers-animate layers-onboard-slide-current">
                <div class="notice is-dismissible" style="margin-left:0;">
                    <div class="layers-content-large">
                        <!-- Your content goes here -->
                        <div class="layers-section-title layers-small layers-no-push-bottom">
                            <h3 class="layers-heading">
                                <?php _e('Thanks for Installing the Real Estate Golden Theme!', 'real-estate-golden'); ?>
                            </h3>
                            <div class="layers-excerpt">
                                <p>
                                    <?php _e('This setup wizard serves as an introduction to your theme and any special options it may have.', 'real-estate-golden'); ?>
                                </p>
                                <ul>
                                    <li><a href="<?php echo esc_url(get_admin_url() . "themes.php?page=tgmpa-install-plugins");?>"><?php _e('Open the Install Theme', 'real-estate-golden'); ?></a></li>
                                    <li><a href="https://wpdirectorykit.com/theme_preview/real-estate-golden" target="_blank"><?php _e('Open the Demo Preview', 'real-estate-golden'); ?></a></li>
                                    <li><a href="https://wpdirectorykit.com/" target="_blank"><?php _e('Visit Our Portal', 'real-estate-golden'); ?></a></li>
                                    <li><a href="https://wpdirectorykit.com/themes.html" target="_blank"><?php _e('Our Themes', 'real-estate-golden'); ?></a></li>
                                    <li><a href="https://wpdirectorykit.com/plugins.html" target="_blank"><?php _e('Our Plugins', 'real-estate-golden'); ?></a></li>
                                    <li><a href="https://wpdirectorykit.com/contact.html" target="_blank"><?php _e('Support Us', 'real-estate-golden'); ?></a></li>
                                </ul>       
                            </div>
                        </div>
                    </div>
                    <div class="layers-button-well" style="margin-bottom: 15px;">
                        <?php if ( file_exists(ABSPATH . 'wp-content/plugins/one-click-demo-import/one-click-demo-import.php') && in_array( 'one-click-demo-import/one-click-demo-import.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )):?>
                            <a class="layers-button btn-primary layers-pull-right onbard-next-step" href="<?php echo esc_url(get_admin_url() . "themes.php?page=one-click-demo-import");?>"><?php _e('Got it, Next Step &rarr; and Install One Click Demo Import', 'real-estate-golden'); ?></a>
                        <?php else:?>
                            <a class="layers-button btn-primary layers-pull-right onbard-next-step" href="<?php echo esc_url(get_admin_url() . "themes.php?page=tgmpa-install-plugins");?>"><?php _e('Got it, Next Step &rarr; and Install One Click Demo Import', 'real-estate-golden'); ?></a>
                        <?php endif;?>
                    </div>
                </div>
                <br/>
                <div class="layers-column layers-span-8 no-gutter layers-demo-video">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/help.jpg'; ?>" style="max-width:700px;max-height:600px"/>
                </div>
            </div>
            <br/>
        </div>
    </div>
</section>

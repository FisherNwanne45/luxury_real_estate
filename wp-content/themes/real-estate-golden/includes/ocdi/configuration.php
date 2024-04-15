<?php

function ocdi_import_files() {
	$pac_name = 'demo-content_premium.xml';
	update_option('real_estate_golden_install_ocdi_images_sizes_enable', 1);
	if(file_exists(ABSPATH."ocdi/real-estate-golden/".$pac_name)) {
		return [
			[
				'import_file_name'           => 'Real Estate Golden',
				'local_import_file'            => ABSPATH."ocdi/real-estate-golden/".$pac_name,
				'import_preview_image_url'   => get_stylesheet_directory_uri() . '/includes/ocdi/preview/preview_estates.jpg',
				'preview_url'                => 'https://demo.wpdirectorykit.com/real-estate-golden',
			]
		];
	} else {
		return [
			[
				'import_file_name'           => 'Real Estate Golden',
				'import_file_url'            => 'https://demo.wpdirectorykit.com/real-estate-golden/'.$pac_name,
				'import_preview_image_url'   => get_stylesheet_directory_uri() . '/includes/ocdi/preview/preview_estates.jpg',
				'preview_url'                => 'https://demo.wpdirectorykit.com/real-estate-golden',
			]
		];
	}


  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );

  function ocdi_register_plugins( $plugins ) {
	$theme_plugins = [
	  [ // A WordPress.org plugin repository example.
		'name'     => 'Elementor', // Name of the plugin.
		'slug'     => 'elementor', // Plugin slug - the same as on WordPress.org plugin repository.
		'required' => true,                     // If the plugin is required or not.
	  ]	
	];
	
	if (file_exists(get_stylesheet_directory() .'/addons/elementinvader.zip')) {
        $theme_plugins[] = [
			'name'     => 'Element Invader',
			'slug'     => 'elementinvader',         // The slug has to match the extracted folder from the zip.
			'required' => true,
			'source'   =>  get_stylesheet_directory() . '/addons/elementinvader.zip',
			'preselected' => true,
        ];
    } else {
		$theme_plugins[] = [
			'name'     => 'Element Invader',
			'slug'     => 'elementinvader',         // The slug has to match the extracted folder from the zip.
			'required' => true,
			'preselected' => true,
        ];
	}

	if (file_exists(get_stylesheet_directory() .'/addons/elementinvader-addons-for-elementor.zip')) {
        $theme_plugins[] = [
			'name'     => 'ElementInvader Addons for Elementor',
			'slug'     => 'elementinvader-addons-for-elementor',         // The slug has to match the extracted folder from the zip.
			'required' => true,
			'source'   =>  get_stylesheet_directory() . '/addons/elementinvader-addons-for-elementor.zip',
			'preselected' => true,
        ];
    } else {
		$theme_plugins[] = [
			'name'     => 'ElementInvader Addons for Elementor',
			'slug'     => 'elementinvader-addons-for-elementor',         // The slug has to match the extracted folder from the zip.
			'required' => true,
			'preselected' => true,
        ];
	}

	if (file_exists(get_stylesheet_directory() .'/addons/wpdirectorykit.zip')) {
        $theme_plugins[] = [
			'name'     => 'WP Directory Kit',
			'slug'     => 'wpdirectorykit',  // The slug has to match the extracted folder from the zip.
			'source'   =>  get_stylesheet_directory() . '/addons/wpdirectorykit.zip',
			'required' => true,
			'preselected' => true,
        ];
    } else {
		$theme_plugins[] = [
			'name'     => 'WP Directory Kit',
			'slug'     => 'wpdirectorykit',  // The slug has to match the extracted folder from the zip.
			'required' => true,
			'preselected' => true,
        ];
	}

    if (file_exists(get_stylesheet_directory() .'/addons/wdk-bookings.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Bookings Addon',
              'slug'     => 'wdk-bookings',         // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-bookings.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	if (file_exists(get_stylesheet_directory() .'/addons/wdk-currency-conversion.zip')) {
		$theme_plugins[] = [
			  'name'     => 'WDK Currency Conversion Addon',
			  'slug'     => 'wdk-currency-conversion',         // The slug has to match the extracted folder from the zip.
			  'source'   =>  get_stylesheet_directory() . '/addons/wdk-currency-conversion.zip',
			  'required' => false,
			  'preselected' => true,
		];
	}
	if (file_exists(get_stylesheet_directory() .'/addons/wdk-favorites.zip')) {
		$theme_plugins[] = [
			  'name'     => 'WDK Favorites Addon',
			  'slug'     => 'wdk-favorites',         // The slug has to match the extracted folder from the zip.
			  'source'   =>  get_stylesheet_directory() . '/addons/wdk-favorites.zip',
			  'required' => false,
			  'preselected' => true,
		];
	}
	if (file_exists(get_stylesheet_directory() .'/addons/wdk-membership.zip')) {
		$theme_plugins[] = [
			  'name'     => 'WDK Membership Addon',
			  'slug'     => 'wdk-membership',         // The slug has to match the extracted folder from the zip.
			  'source'   =>  get_stylesheet_directory() . '/addons/wdk-membership.zip',
			  'required' => false,
			  'preselected' => true,
		];
	}
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-mortgage.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Mortgage Addon',
              'slug'     => 'wdk-mortgage',         // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-mortgage.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-wp-all-import.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Wp All Import',
              'slug'     => 'wdk-wp-all-import',         // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-wp-all-import.zip',
              'required' => false,
              'preselected' => false,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/profile-picture-uploader.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Profile picture uploader',
              'slug'     => 'profile-picture-uploader',         // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/profile-picture-uploader.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-reviews.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Reviews',
              'slug'     => 'wdk-reviews',         // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-reviews.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/sweet-energy-efficiency.zip')) {
        $theme_plugins[] = [
              'name'     => 'Sweet Energy Efficiency',
              'slug'     => 'sweet-energy-efficiency',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/sweet-energy-efficiency.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-report-abuse.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Report Abuse',
              'slug'     => 'wdk-report-abuse',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-report-abuse.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-facebook-comments.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Facebook Comments',
              'slug'     => 'wdk-facebook-comments',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-facebook-comments.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-mailchimp.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Mailchimp',
              'slug'     => 'wdk-mailchimp',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-mailchimp.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-compare-listing.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Compare listing',
              'slug'     => 'wdk-compare-listing',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-compare-listing.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-save-search.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Save Search',
              'slug'     => 'wdk-save-search',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-save-search.zip',
              'required' => false,
              'preselected' => true,
        ];
    }

	if (file_exists(get_stylesheet_directory() .'/addons/wdk-pdf-export.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK PDF Download',
              'slug'     => 'wdk-pdf-export',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-pdf-export.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
	
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-listing-claim.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Claim / Take Ownership',
              'slug'     => 'wdk-listing-claim',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-listing-claim.zip',
              'required' => false,
              'preselected' => true,
        ];
    }

    if (file_exists(get_stylesheet_directory() .'/addons/wdk-duplicate-listing.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Duplicate Listing',
              'slug'     => 'wdk-duplicate-listing',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-duplicate-listing.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
		
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-geo.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Geo',
              'slug'     => 'wdk-geo',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-geo.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
		
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-svg-map.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK SVG Maps',
              'slug'     => 'wdk-svg-map',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-svg-map.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
		
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-api.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK API',
              'slug'     => 'wdk-api',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-api.zip',
              'required' => false,
              'preselected' => false,
        ];
    }
    		
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-messages-chat.zip')) {
        $theme_plugins[] = [
              'name'     => 'WDK Live Chat',
              'slug'     => 'wdk-messages-chat',  // The slug has to match the extracted folder from the zip.
              'source'   =>  get_stylesheet_directory() . '/addons/wdk-messages-chat.zip',
              'required' => false,
              'preselected' => true,
        ];
    }
    
    if (file_exists(get_stylesheet_directory() .'/addons/wdk-membership.zip')) {
        $theme_plugins[] = [
            'name'     => 'WooCommerce',
            'slug'     => 'woocommerce',  // The slug has to match the extracted folder from the zip.
            'required' => false,
            'preselected' => true,
        ];
	}


	return array_merge( $plugins, $theme_plugins );
  }
  add_filter( 'ocdi/register_plugins', 'ocdi_register_plugins' );

 /* after import */
function ocdi_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
	));

	

    $menu_object = wp_get_nav_menu_object('Menu Golden');
    if ($menu_object) {
		set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $menu_object->term_id,
			'main_menu' => $menu_object->term_id,
		));
    } else {
        $main_menu = get_term_by( 'Menu 1', 'Main Menu', 'nav_menu', 'Menu 1' );
        if(!$main_menu) {
            $main_menu = wp_get_nav_menu_object("Menu 1" );
            set_theme_mod( 'nav_menu_locations', array(
                'main-menu' => $main_menu->term_id,
                'main_menu' => $main_menu->term_id,
            ));
        }
    }

    // Assign front page and posts page (blog page).
    $front_page_id = real_estate_golden_page_by_title( 'Home Page' );
    $listing_page_id  = real_estate_golden_page_by_title( 'Listing Preview' );
    $results_page_id  = real_estate_golden_page_by_title( 'Grid map' );
    $page_for_posts_id = real_estate_golden_page_by_title( 'Blog' );
    $home_alt_page = real_estate_golden_page_by_title( 'Home Alt' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $page_for_posts_id->ID );
	
	if($listing_page_id)
		update_option( 'wdk_listing_page', $listing_page_id->ID, TRUE);
	
	if($results_page_id)
		update_option( 'wdk_results_page', $results_page_id->ID, TRUE);

	/* remove default post */
		
	$post_default= real_estate_golden_page_by_title('Hello world!', OBJECT, 'post');
	if($post_default)
		wp_delete_post(  $post_default->ID, true );

	/* import wdk content */
	$WMVC = &wdk_get_instance();

	if ( 'REGOLDEN Cars' === $selected_import['import_file_name'] ) {
		$_GET['multipurpose'] = 'car-dealer.xml';
    }

	$WMVC->load_controller('wdk_settings','_api_import');

	/* udpate posts */	
	$posts = get_posts( array(
		'numberposts'=> 5,
		'orderby'   => 'id',
		'order'      => 'ASC',
		'post_type'  => 'post',
	));

	$date = date('Y-m-d H:i:s');
	foreach($posts as $post) {
		$post_udpate = array();
		$post_udpate['ID'] = $post->ID;
		$post_udpate['post_date'] = $date;
		$post_udpate['post_date_gmt'] = $date;
		$post_udpate['post_modified'] = $date;
		$post_udpate['post_modified_gmt'] = $date;
		wp_update_post($post_udpate );
	}

    /* rename pages, add suffix Golden */
	foreach(array('Home Alt','Featured​','Home Page','Grid map','Listing Preview','Featured Property','Contact','Rent','Sale','List Map','Home','Header Search') as $page_title) {
        $page = real_estate_golden_page_by_title( $page_title );
        if(empty($page)) continue;
        
        // Store the current page layout
        $current_layout = get_post_meta($page->ID, '_wp_page_template', true);

        // Update only the page title
        $post_udpate = array();
        $post_udpate['ID'] = $page->ID;
        $post_udpate['post_title'] = $page_title.' '.esc_html__('Golden','real-estate-golden');
        wp_update_post($post_udpate );

        // Restore the page layout
        update_post_meta($page->ID, '_wp_page_template', $current_layout);
	}
    /* end rename pages, add suffix Golden */

    /* filter menu */

    $menu_id = NULL;
    $locations = get_nav_menu_locations();
    if(isset($locations['main_menu'])) {
        $menu_id = $locations['main_menu'];
    }
    
    if (empty($menu_id)) {
        if($menus = wp_get_nav_menus())
            $menu_id =(int)$menus[0]->term_id;
    }
    
    if (!empty($menu_id)) {
        $items = wp_get_nav_menu_items($menu_id);
        $position = 1;
        if($items) foreach ($items as $item) {
            $itemData =  array(
                'menu-item-object-id' => $item->object_id,
                'menu-item-title' =>  str_replace(' '.esc_html__('Golden','real-estate-golden'),'',$item->title),
                'menu-item-parent-id' => $item->menu_item_parent,
                'menu-item-position' => $position++,
                'menu-item-object' => $item->object,
                'menu-item-type' => $item->type,
                'menu-item-status' => $item->post_status,
            );
    
            wp_update_nav_menu_item($menu_id, $item->ID, $itemData);
        }
    }

	/* replace content links in footer menu */
	if ( true) {
		if($results_page_id) {
			$from = get_site_url().'/grid-map/?is_featured=on#results';
			$to = real_estate_golden_url_suffix(get_permalink($results_page_id), 'is_featured=on#results');
			real_estate_golden_replace_links($from, $to);
		}
		
		if($page_for_posts_id) {
			$from = get_site_url().'/blog/';
			$to = get_permalink($page_for_posts_id);
			real_estate_golden_replace_links($from, $to);
		}

		if($home_alt_page) {
			$from = get_site_url().'/home-alt/';
			$to = get_permalink($home_alt_page);
			real_estate_golden_replace_links($from, $to);
		}
		if($results_page_id) {
			$from = get_site_url().'/grid-map/?field_5=Sale#results';
			$to = real_estate_golden_url_suffix(get_permalink($results_page_id), 'field_5=Sale#results');
			real_estate_golden_replace_links($from, $to);
		}
    }

	/* Replace Links */
	/* login */
		
	$from = 'https://www.wpdirectorykit.com/nexproperty/wp-admin/admin.php?page=wdk_listing';
	$to = get_admin_url();
	real_estate_golden_replace_links($from, $to);

	$from = 'https://www.wpdirectorykit.com/nexproperty/wp-admin/';
	$to = get_admin_url();
	real_estate_golden_replace_links($from, $to);

	$from = 'https://www.wpdirectorykit.com/nexproperty/index.php/login/';
	$to = get_admin_url();
	real_estate_golden_replace_links($from, $to);
	
	$from = 'https://www.wpdirectorykit.com/nexproperty';
	$to = get_home_url();
	real_estate_golden_replace_links($from, $to);
	
	/* homepage */
	$from = 'home_page_link_replace';
	$to = get_home_url();
	real_estate_golden_replace_links($from, $to);
	
	/* homepage */
	$from = '2020';
	$to = date('Y');
	real_estate_golden_replace_links($from, $to);
	$from = '2021';
	real_estate_golden_replace_links($from, $to);
	
	/* wdk_listing_preview_feature_category */
	$from = 'wdk_listing_preview_feature_category';
	$to = 26;
	real_estate_golden_replace_links($from, $to);
	if ( 'REGOLDEN Cars' === $selected_import['import_file_name'] ) {
		/* homepage */
		$from = 'Properties';
		$to = 'Cars';
		real_estate_golden_replace_links($from, $to);
		$from = 'Popular House Types';
		$to = 'Popular Car Types';
		real_estate_golden_replace_links($from, $to);
		$from = 'House';
		$to = 'Car';
		real_estate_golden_replace_links($from, $to);
		$from = 'Add Property'; 
		$to = 'Add Car';
		real_estate_golden_replace_links($from, $to);
    }

	/* custom_logo */
	if(function_exists('wmvc_add_wp_image')) {
		$custom_logo_id = wmvc_add_wp_image(get_stylesheet_directory() .'/assets/images/logo.jpg');
		set_theme_mod( 'custom_logo', $custom_logo_id );

    	set_theme_mod( 'footer_logo', get_stylesheet_directory_uri() .'/assets/images/logo5.png');
    	set_theme_mod( 'footer_logo', get_stylesheet_directory_uri() .'/assets/images/logo5.png');
				
		$custom_logo_id = wmvc_add_wp_image(get_stylesheet_directory() .'/assets/images/fav.jpg');
		update_option( 'site_icon', $custom_logo_id );
	}

	set_theme_mod( 'footer_content', esc_html__('Discover your dream home with our tailored real estate solutions. From luxurious estates to cozy apartments, we make finding the perfect property effortless', 'real-estate-golden') );
	set_theme_mod( 'footer_phone_number', '7186353361' );
	set_theme_mod( 'footer_email_address', 'agent@info.com' );
	set_theme_mod( 'footer_copyright_text', 'Copyright © '.date('Y').' REGOLDEN' );

	/* sidebar */
	if(true){
		/* clear */
		$sidebars_widgets = get_option( 'sidebars_widgets' );
		$sidebars_widgets['sidebar-1'] = array();
		update_option('sidebars_widgets', $sidebars_widgets); //update sidebars
		
		real_estate_golden_insert_widget('sidebar-1', 'search');
		real_estate_golden_insert_widget('sidebar-1', 'recent-posts');
		real_estate_golden_insert_widget('sidebar-1', 'categories');

		/* clear */
		$sidebars_widgets = get_option( 'sidebars_widgets' );
		$sidebars_widgets['sidebar'] = array();
		update_option('sidebars_widgets', $sidebars_widgets); //update sidebars
		
		real_estate_golden_insert_widget('sidebar', 'search');
		real_estate_golden_insert_widget('sidebar', 'recent-posts');
		real_estate_golden_insert_widget('sidebar', 'categories');

		/* clear */
		$sidebars_widgets = get_option( 'sidebars_widgets' );
		$sidebars_widgets['footer'] = array();
		update_option('sidebars_widgets', $sidebars_widgets); //update sidebars
		
		real_estate_golden_insert_widget('footer', 'text', array('title' => esc_html__('Popular Properties', 'real-estate-golden'), 'text'=>'[wdk-latest-listings-list]'));
		real_estate_golden_insert_widget('footer', 'recent-posts');
		real_estate_golden_insert_widget('footer', 'text', array('title' => esc_html__('Newsletter', 'real-estate-golden'), 'text'=>'[eli-newsletter]'));
	}

	/* header buttons */
	if(true){
		set_theme_mod('show_sign_in_button','yes');
		set_theme_mod('show_property_button','yes');
		set_theme_mod('sign_in_button_text', esc_html__('Login', 'real-estate-golden'));

		if ( 'REGOLDEN Cars' === $selected_import['import_file_name'] ) {
			set_theme_mod('property_button_text', esc_html__('Add Car', 'real-estate-golden'));
		} else {
			set_theme_mod('property_button_text', esc_html__('Add Property', 'real-estate-golden'));
		}
	}
    
	update_option('real_estate_golden_install_ocdi_images_sizes_enable', 0);
	update_option('wdk_theme_gold_installed', 1);
}

function real_estate_golden_replace_links($from = '', $to = '') {
	global $wpdb;
	// @codingStandardsIgnoreStart cannot use `$wpdb->prepare` because it remove's the backslashes
	$rows_affected = $wpdb->query(
		"UPDATE {$wpdb->postmeta} " .
		"SET `meta_value` = REPLACE(`meta_value`, '" . str_replace( '/', '\\\/', $from ) . "', '" . str_replace( '/', '\\\/', $to ) . "') " .
		"WHERE `meta_key` = '_elementor_data' AND `meta_value` LIKE '[%' ;" );
	/* end login */
}

add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );

if(!function_exists('real_estate_golden_insert_widget'))
{
    function real_estate_golden_insert_widget($sidebar_id, $widget_name, $widget_options_new = array())
    {
        static $sidebar_cleared = array();
        
        static $widgets_array = array();
        $id = 1;
        
        if(isset($widgets_array[$widget_name])) {
            $widgets_array[$widget_name]++;
            $id = $widgets_array[$widget_name];
        } else {
            $widgets_array[$widget_name] = $id;
        }
        
        $sidebars_widgets = get_option( 'sidebars_widgets' );
        /* set teme mod */ 
        
        $widget_options = get_option('widget_'.$widget_name);
        if(empty($widget_options)) {
			$widget_options = array('_multiwidget'=>1);
		}
        $widget_options[$id] = array('title'=>'');
        
        $widget_options[$id] = $widget_options_new;
        
        
        // [Check and skip import if found]
        $skip_widget_import = false;
        if(isset($sidebars_widgets[$sidebar_id]))
        foreach($sidebars_widgets[$sidebar_id] as $val)
        {
            if(strpos($val, $widget_name) !== false)
                $skip_widget_import = true;
        }
        if(false && $skip_widget_import)
        {
            return FALSE;
        }
        // [/Check and skip import if found]

        if(isset($sidebars_widgets[$sidebar_id]) && !in_array($widget_name.'-'.$id, $sidebars_widgets[$sidebar_id])) { //check if sidebar exists and it is empty
            
            if(empty($sidebars_widgets[$sidebar_id]))
            {
                $sidebars_widgets[$sidebar_id] = array($widget_name.'-'.$id); //add a widget to sidebar
            }
            else
            {
                $sidebars_widgets[$sidebar_id][] = $widget_name.'-'.$id;
            }

            update_option('widget_'.$widget_name, $widget_options); //update widget default options
            update_option('sidebars_widgets', $sidebars_widgets); //update sidebars
        }
        else // if sidebar doesn't exists'
        {
            $sidebars_widgets[$sidebar_id] = array($widget_name.'-'.$id); //add a widget to sidebar
            $sidebars_widgets[$sidebar_id][] = $widget_name.'-'.$id;

            update_option('widget_'.$widget_name, $widget_options); //update widget default options
            update_option('sidebars_widgets', $sidebars_widgets); //update sidebars
        }

        
        return TRUE;
    }
}


if ( ! function_exists('real_estate_golden_url_suffix'))
{
	function real_estate_golden_url_suffix($base_url, $extension_url="")
	{
        if(strpos($base_url,'?') !== FALSE){
            $base_url .='&';
        } else {
            $base_url .='?';
        }
        return  $base_url.$extension_url;
	}
}
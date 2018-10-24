<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "fit";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => 'Fair Insulation Technology Studio',
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'FITStudio', 'redux-framework-demo' ),
        'page_title'           => __( 'FITStudio', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-feedback',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => 'dashicons-feedback',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,
       
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-docs',
//        'href'  => 'http://docs.reduxframework.com/',
//        'title' => __( 'Documentation', 'redux-framework-demo' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        //'id'    => 'redux-support',
//        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
//        'title' => __( 'Support', 'redux-framework-demo' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-extensions',
//        'href'  => 'reduxframework.com/extensions',
//        'title' => __( 'Extensions', 'redux-framework-demo' ),
//    );
//
//    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
//    $args['share_icons'][] = array(
//        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
//        'title' => 'Visit us on GitHub',
//        'icon'  => 'el el-github'
//        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
//    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/khm.mahmud.topu',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://twitter.com/reduxframework',
//        'title' => 'Follow us on Twitter',
//        'icon'  => 'el el-twitter'
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://www.linkedin.com/company/redux-framework',
//        'title' => 'Find us on LinkedIn',
//        'icon'  => 'el el-linkedin'
//    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Always backup your data ! </p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>For Domain,Hosting,Websites,Softwares,Graphics Design & IT Support Please Contact At: +8801675756828</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

//    $tabs = array(
//        array(
//            'id'      => 'redux-help-tab-1',
//            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
//            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
//        ),
//        array(
//            'id'      => 'redux-help-tab-2',
//            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
//            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
//        )
//    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
     
    /*About Section Starts*/
    Redux::setSection( $opt_name, array(
        'title' => __( 'About Section', 'redux-framework-demo' ),
        'id'    => 'about',
        'desc'  => __( 'Edit About Section', 'redux-framework-demo' ),
        'icon'  => 'el el-group'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Company Details', 'redux-framework-demo' ),
        'desc'       => __( 'Edit TAX,TIN,VAT etc. Information', 'redux-framework-demo' ),
        'id'         => 'company-details',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'trade',
                'type'     => 'text',
                'title'    => __( 'Trade License No.', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Trade License No', 'redux-framework-demo' ),
                'default'  => '123-456-789',
            ),
             array(
                'id'       => 'tin',
                'type'     => 'text',
                'title'    => __( 'TIN No.', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter TIN No', 'redux-framework-demo' ),
                'default'  => '164531651654',
            ),
            array(
                'id'       => 'vat',
                'type'     => 'text',
                'title'    => __( 'Vat Registration No.', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Vat Registration No', 'redux-framework-demo' ),
                'default'  => '000396584',
            ),
              array(
                'id'       => 'owner_type',
                'type'     => 'text',
                'title'    => __( 'Ownership Type', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Ownership Type', 'redux-framework-demo' ),
                'default'  => ' Limited Liability Company.',
            ),
              array(
                'id'       => 'employee_no',
                'type'     => 'text',
                'title'    => __( 'Employee No.', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Employee No.', 'redux-framework-demo' ),
                'default'  => '45-50 (+/-)',
            )
            
        )
    ) );
  
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Business Type', 'redux-framework-demo' ),
        'desc'       => __( 'Enter Business Type(5 Fields Max)', 'redux-framework-demo' ),
        'id'         => 'business_type',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'type1',
                'type'     => 'text',
                'title'    => __( 'Type:1', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Type Name', 'redux-framework-demo' ),
                'default'  => 'EPS',
            ),
               array(
                'id'       => 'type2',
                'type'     => 'text',
                'title'    => __( 'Type:2', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Type Name', 'redux-framework-demo' ),
                'default'  => ' Rockwool',
            ),
               array(
                'id'       => 'type3',
                'type'     => 'text',
                'title'    => __( 'Type:3', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Type Name', 'redux-framework-demo' ),
                'default'  => 'ERP',
            ),
               array(
                'id'       => 'type4',
                'type'     => 'text',
                'title'    => __( 'Type:4', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Type Name', 'redux-framework-demo' ),
                'default'  => 'Sandwitch Panels Manufacturer',
            ),
               array(
                'id'       => 'type5',
                'type'     => 'text',
                'title'    => __( 'Type:5', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Type Name', 'redux-framework-demo' ),
                'default'  => 'Heat Proof Steel Building System',
            )
             
            
        )
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Import/Export Countires', 'redux-framework-demo' ),
        'desc'       => __( 'Enter Import/Export Countries', 'redux-framework-demo' ),
        'id'         => 'countries',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'country',
                'type'        => 'slides',
                'placeholder' => array(
                    'title'           => __('Country Name', 'redux-framework-demo'),
                    'description'     => __('Optional Alternative Description if image gets deleted', 'redux-framework-demo'),
                    'url'             => __('No Need To Add Links', 'redux-framework-demo'),
                )
            ),
             
             
            
        )
    ) );
   /*About Section Ends*/

    /*Service Section Starts*/
    Redux::setSection( $opt_name, array(
        'title' => __( 'Service Section', 'redux-framework-demo' ),
        'id'    => 'service',
        'desc'  => __( 'Edit Service Section', 'redux-framework-demo' ),
        'icon'  => 'el el-list'
    ) );
     Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Names', 'redux-framework-demo' ),
        'desc'       => __( 'Enter Service Name (5 Fields Max)', 'redux-framework-demo' ),
        'id'         => 'service_names',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'name1',
                'type'     => 'text',
                'title'    => __( 'Service No:1', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Service Name', 'redux-framework-demo' ),
                'default'  => 'Heat Proof Steel Building System',
            ),
              array(
                'id'       => 'desc1',
                'type'     => 'text',
                'desc'     => __( 'Enter Short Description', 'redux-framework-demo' ),
                'default'  => 'Heat Proof Steel Building System',
            ),
             array(
                'id'       => 'name2',
                'type'     => 'text',
                'title'    => __( 'Service No:2', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Service Name', 'redux-framework-demo' ),
                'default'  => 'Steel Fabrication & Erection Work',
            ),
              array(
                'id'       => 'desc2',
                'type'     => 'text',
                'desc'     => __( 'Enter Short Description', 'redux-framework-demo' ),
                'default'  => 'Steel Fabrication & Erection Work',
            ),
             array(
                'id'       => 'name3',
                'type'     => 'text',
                'title'    => __( 'Service No:3', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Service Name', 'redux-framework-demo' ),
                'default'  => '(EPS,Rockwool) Sandwitch Panel Manufacture',
            ),
              array(
                'id'       => 'desc3',
                'type'     => 'text',
                'desc'     => __( 'Enter Short Description', 'redux-framework-demo' ),
                'default'  => '(EPS,Rockwool) Sandwitch Panel Manufacture',
            ),
             array(
                'id'       => 'name4',
                'type'     => 'text',
                'title'    => __( 'Service No:4', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Service Name', 'redux-framework-demo' ),
                'default'  => '(EPS,PU,Rockwool) Sandwitch Panel Erection Solution',
            ),
              array(
                'id'       => 'desc4',
                'type'     => 'text',
                'desc'     => __( 'Enter Short Description', 'redux-framework-demo' ),
                'default'  => '(EPS,PU,Rockwool) Sandwitch Panel Erection Solution',
            ),
             array(
                'id'       => 'name5',
                'type'     => 'text',
                'title'    => __( 'Service No:5', 'redux-framework-demo' ),
                
                'desc'     => __( 'Enter Service Name', 'redux-framework-demo' ),
                'default'  => 'Any Kind Of Insulation Supply & Engineering Work',
            ),
              array(
                'id'       => 'desc5',
                'type'     => 'text',
                'desc'     => __( 'Enter Short Description', 'redux-framework-demo' ),
                'default'  => 'Any Kind Of Insulation Supply & Engineering Work',
            )
            
        )
    ) );
   /*Service Section Ends*/

   /*Address Section Starts*/
    Redux::setSection( $opt_name, array(
        'title' => __( 'Address', 'redux-framework-demo' ),
        'id'    => 'address',
        'desc'  => __( 'Enter Address', 'redux-framework-demo' ),
        'icon'  => 'el el-map-marker'
    ) );
 Redux::setSection( $opt_name, array(
        'title'      => __( 'Location Information', 'redux-framework-demo' ),
        'desc'       => __( 'Enter Location Information', 'redux-framework-demo' ),
        'id'         => 'address_info',
        'subsection' => true,
        'fields'     => array(
            array(
            'id'       => 'location',
            'type'     => 'text',
            'title'    => __('Enter Geographical Address', 'redux-framework-demo'),
            'default'  => 'Gobindobari,Kashimpur Gazipur,Dhaka'
           ),
             array(
            'id'       => 'contact_no',
            'type'     => 'text',
            'title'    => __('Contact No.', 'redux-framework-demo'),
            'default'  => '+01848097661'
           ),
             array(
            'id'       => 'email',
            'type'     => 'text',
            'title'    => __('Enter Email Address', 'redux-framework-demo'),
            'validate' => 'email',
            'msg'      => 'Enter Valid Email',
            'default'  => 'example@fit.com'
           )
        
        )
    ) );
   /*Address Section Ends*/

    /*Social Section Starts*/
       Redux::setSection( $opt_name, array(
        'title' => __( 'Social Link', 'redux-framework-demo' ),
        'id'    => 'social',
        'desc'  => __( 'Enter Social Link', 'redux-framework-demo' ),
        'icon'  => 'el el-link'
    ) );
        Redux::setSection( $opt_name, array(
        'title'      => __( 'Social Information', 'redux-framework-demo' ),
        'desc'       => __( 'Enter Social Links', 'redux-framework-demo' ),
        'id'         => 'social_info',
        'subsection' => true,
        'fields'     => array(
            array(
            'id'       => 'facebook',
            'type'     => 'text',
            'title'    => __('Enter Facebook Link', 'redux-framework-demo'),
            'default'  => '#'
           ),
             array(
            'id'       => 'twitter',
            'type'     => 'text',
            'title'    => __('Enter Twitter Link.', 'redux-framework-demo'),
            'default'  => '#'
           ),
             array(
            'id'       => 'youtube',
            'type'     => 'text',
            'title'    => __('Enter Youtube Link', 'redux-framework-demo'),
            
           )
        
        )
    ) );
   /*Social Section Ends*/



 /*Banner Section Starts*/
       Redux::setSection( $opt_name, array(
        'title' => __( 'Banner Section', 'redux-framework-demo' ),
        'id'    => 'banner',
        'desc'  => __( 'Enter Social Link', 'redux-framework-demo' ),
        'icon'  => 'el  el-picasa'
    ) );
        Redux::setSection( $opt_name, array(
        'title'      => __( 'First Banner', 'redux-framework-demo' ),
        'desc'       => __( 'Settings of first Banner', 'redux-framework-demo' ),
        'id'         => 'first_banner',
        'subsection' => true,
        'fields'     => array(
            array(
            'id'       => 'btext11',
            'type'     => 'text',
            'title'    => __('Enter Title 1', 'redux-framework-demo'),
            'default'  => 'Efficient Sandwitch Pannel'
           ),
             array(
            'id'       => 'btext12',
            'type'     => 'text',
            'title'    => __('Enter Title 2', 'redux-framework-demo'),
            'default'  => 'Perfect Insulator'
           ),
             array(
            'id'       => 'btext13',
            'type'     => 'text',
            'title'    => __('Enter Title 3', 'redux-framework-demo'),
            'default'  => 'Latest Insulator Technology Now In Bangladesh'
           ),
            
             array(
            'id'       => 'bimage11',
            'type'     => 'media',
            'title'    => __('Enter Youtube Link', 'redux-framework-demo'),
            'url' => true,
            'default'  => array(
                    'url'=>get_template_directory_uri().'/images/bg2.jpg'
                ),
              )
        
        )
    ) );

 Redux::setSection( $opt_name, array(
        'title'      => __( 'Second Banner', 'redux-framework-demo' ),
        'desc'       => __( 'Settings of Second Banner', 'redux-framework-demo' ),
        'id'         => 'second_banner',
        'subsection' => true,
        'fields'     => array(
            array(
            'id'       => 'btext21',
            'type'     => 'text',
            'title'    => __('Enter Title 1', 'redux-framework-demo'),
            'default'  => 'Efficient Sandwitch Pannel'
           ),
             array(
            'id'       => 'btext22',
            'type'     => 'text',
            'title'    => __('Enter Title 2', 'redux-framework-demo'),
            'default'  => 'Perfect Insulator'
           ),
             array(
            'id'       => 'btext23',
            'type'     => 'text',
            'title'    => __('Enter Title 3', 'redux-framework-demo'),
            'default'  => 'Latest Insulator Technology Now In Bangladesh'
           ),
            
             array(
            'id'       => 'bimage21',
            'type'     => 'media',
            'title'    => __('Enter Youtube Link', 'redux-framework-demo'),
             'url' => true,
            'default'  => array(
                    'url'=>get_template_directory_uri().'/images/bg4.jpg'
                ),
              )
        
        )
    ) );
   /*Banner Section Ends*/


    
    /*
     * <--- END SECTIONS
     */

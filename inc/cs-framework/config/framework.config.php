<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'neuron-online-options',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Neuron Theme <small>by Asikur </small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]        = array();


// ----------------------------------------------
// a option section for Neuron    -
// ----------------------------------------------

//Global Section 
$options[] = array(
    'name'   => 'globalsection',
    'title'  => 'Global Section',
    'icon'   => 'fa fa-star',

    // begin: fields
    'fields' => array(
      
          array(
                'id'    => 'company_logo',
                'type'  => 'gallery',
                'title' => 'Give company logo',
              ),
            
    ),
);
//social link Section
$options[] = array(
    'name'   => 'social_section',
    'title'  => 'Social link Section',
    'icon'   => 'fa fa-star',

    // begin: fields
    'fields' => array(

          array(
            'id'        => 'top_social_group',
            'type'      => 'group',
            'title'     => 'Social Group',
            'button_title'    => 'Add New Social Field',

            'fields'    => array(
              
               array(
                'id'    => 'social_icon',
                'type'  => 'icon',
                'title' => 'Give social Icon',
              ),
               array(
                'id'    => 'social_link',
                'type'  => 'text',
                'title' => 'Give Social Link',
              ),
              array(
                'id'    => 'social_link_target',
                'type'  => 'select',
                'title' => 'Social Link Target',
                'options' => array(
                  '_self' => 'Open in same Tab',
                  '_blank' => 'Open in Other Tab',
                ),
              ),
              
            ),
          ),
    ),
);

//Header Section
$options[] = array(
    'name'   => 'header_top_section',
    'title'  => 'Header Section',
    'icon'   => 'fa fa-star',

    // begin: fields
    'fields' => array(

        array(
            'id'    => 'enable_header_top',
            'type'  => 'switcher',
            'title' => 'Enable Header Top Section',
            'default' => true,
            'help' => 'If you want to enable header top section, just enable it.',
        ),
        array(
            'id'        => 'top_link_group',
            'type'      => 'group',
            'title'     => 'Link Group',
            'button_title'    => 'Add New Link',

            'fields'    => array(
              array(
                'id'    => 'link_text',
                'type'  => 'text',
                'title' => 'Give Link Title',
              ),
               array(
                'id'    => 'link_icon',
                'type'  => 'icon',
                'title' => 'Give Link Icon',
              ),
               array(
                'id'    => 'link',
                'type'  => 'text',
                'title' => 'Give Link ',
              ),
              array(
                'id'    => 'link_target',
                'type'  => 'select',
                'title' => 'Link Target',
                'options' => array(
                  '_self' => 'Open in same Tab',
                  '_blank' => 'Open in Other Tab',
                ),
              ),
              
            ),
          
            'dependency' => array('enable_header_top', '==', 'true'),
          ),


    ),
);

//About Page

$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Home Page',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(
        array(
              'id'    => 'promo_title',
              'type'  => 'text',
              'title' => 'Give Promo Title',
              'default' => 'Welcome to the Neuron Finance',
        ),
         array(
              'id'    => 'promo_content',
              'type'  => 'textarea',
              'title' => 'Give Promo Content',
              'default' => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
        ),
        array(
              'id'    => 'agency',
              'type'  => '',
              'title' => 'Agency Area',
        ),
        array(
              'id'    => 'agency_title',
              'type'  => 'text',
              'title' => 'Give Agency Title',
              'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
        ),
         array(
              'id'    => 'agency_desc',
              'type'  => 'textarea',
              'title' => 'Give Agency Description',
        ),
         array(
              'id'    => 'agency_img',
              'type'  => 'image',
              'title' => 'Give Agency Image',
        ),
    ),
  );
//About Page 
$options[] = array(
    'name'   => 'aboutpage',
    'title'  => 'About Page',
    'icon'   => 'fa fa-user',

    // begin: fields
    'fields' => array(
        array(
            'id'        => 'faq_group',
            'type'      => 'group',
            'title'     => 'FAQ Group',
            'button_title'    => 'Add New FAQ',

            'fields'    => array(
              array(
                'id'    => 'faq_title',
                'type'  => 'text',
                'title' => 'FAQ Title',
              ),
              array(
                'id'    => 'faq_desc',
                'type'  => 'textarea',
                'title' => 'FAQ Description',
              ),
              
            ),
          ),
          array(
                'id'    => 'know_more_title',
                'type'  => 'text',
                'title' => 'Know More About Us Title',
              ),
            array(
                'id'    => 'know_more_desc',
                'type'  => 'textarea',
                'title' => 'Know More About Us Description',
              ),
    ),
);



CSFramework::instance( $settings, $options );

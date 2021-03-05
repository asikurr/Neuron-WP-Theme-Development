<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Neuron work Page Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id'        => 'neuron_work_meta',
    'title'     => 'Work Options',
    'post_type' => 'work',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin: a section
        array(
            'name'   => 'work_meta_section_1',
            // begin: fields
            'fields' => array(

                // begin: a field
                array(
                    'id'    => 'sub_title',
                    'type'  => 'text',
                    'title' => 'Subtitle Field',
                    'desc'  => 'Type work subtitle',
                ),
                array(
                    'id'      => 'link_text',
                    'type'    => 'text',
                    'title'   => 'Link Text Field',
                    'desc'    => 'Type button Label',
                    'default' => 'Visit Website',
                ),
                array(
                    'id'      => 'link',
                    'type'    => 'text',
                    'title'   => 'Link Field',
                    'desc'    => 'Type work Link',
                    'default' => 'https://www.facebook.com/asikur.cse',
                ),
                array(
                    'id'              => 'work-info-group-1',
                    'type'            => 'group',
                    'title'           => 'Work Info Group',
                    'button_title'    => 'Add New Work Info',
                    'accordion_title' => 'Add New Info Group',

                    'fields'          => array(
                        array(
                            'id'    => 'title',
                            'type'  => 'text',
                            'title' => 'Information Title',
                        ),
                        array(
                            'id'    => 'Value',
                            'type'  => 'text',
                            'title' => 'Information Value',
                        ),

                    ),
                ),

                // end: a field

            ), // end: fields
        ), // end: a section

    ),
);

// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
$options[] = array(
    'id'        => '_custom_page_side_options',
    'title'     => 'Custom Page Side Options',
    'post_type' => 'page',
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(

        array(
            'name'   => 'section_3',
            'fields' => array(

                array(
                    'id'      => 'section_3_image_select',
                    'type'    => 'image_select',
                    'options' => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
                    ),
                    'default' => 'value-2',
                ),

                array(
                    'id'         => 'section_3_text',
                    'type'       => 'text',
                    'attributes' => array(
                        'placeholder' => 'do stuff',
                    ),
                ),

                array(
                    'id'      => 'section_3_switcher',
                    'type'    => 'switcher',
                    'label'   => 'Are you sure ?',
                    'default' => true,
                ),

            ),
        ),

    ),
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id'        => '_custom_post_options',
    'title'     => 'Custom Post Options',
    'post_type' => 'post',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        array(
            'name'   => 'section_4',
            'fields' => array(

                array(
                    'id'    => 'section_4_text',
                    'type'  => 'text',
                    'title' => 'Text Field',
                ),

                array(
                    'id'    => 'section_4_textarea',
                    'type'  => 'textarea',
                    'title' => 'Textarea Field',
                ),

                array(
                    'id'    => 'section_4_upload',
                    'type'  => 'upload',
                    'title' => 'Upload Field',
                ),

                array(
                    'id'    => 'section_4_switcher',
                    'type'  => 'switcher',
                    'title' => 'Switcher Field',
                    'label' => 'Yes, Please do it.',
                ),

            ),
        ),

    ),
);

CSFramework_Metabox::instance( $options );

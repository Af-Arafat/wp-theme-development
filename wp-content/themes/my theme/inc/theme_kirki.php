<?php
new \Kirki\Panel(
    'panel_top_header',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Top Header', 'kirki' ),
        'description' => esc_html__( 'My Panel Description.', 'kirki' ),
    ]
);


// Section 01
function mytheme_top_info_secitons ()
{

// Section 01
    new \Kirki\Section(
        'section_Top_header',
        [
            'title'       => esc_html__( 'Info sections', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'panel_top_header',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'top_header_switch',
            'label'       => esc_html__( 'Top bar Switch Field', 'kirki' ),
            'description' => esc_html__( 'You can off your top bar with that switch control', 'kirki' ),
            'section'     => 'section_Top_header',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'top_header_address',
            'label'    => esc_html__( 'Address bar', 'kirki' ),
            'section'  => 'section_Top_header',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'top_header_url',
            'label'    => esc_html__( 'URL Control', 'kirki' ),
            'section'  => 'section_Top_header',
            'default'  => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'top_header_mail',
            'label'    => esc_html__( 'Mail bar', 'kirki' ),
            'section'  => 'section_Top_header',
            'default'  => esc_html__( 'ikramkhan6947@gmail.com', 'kirki' ),
            'priority' => 10,
        ]
    );


}

//  Section 02
function mytheme_top_social_section ()
{


    new \Kirki\Section(
        'section_social',
        [
            'title'       => esc_html__( 'Social icons', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'panel_top_header',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings' => 'facebook_URL',
            'label'    => esc_html__( 'facebook icon', 'kirki' ),
            'section'  => 'section_social',
            'default'  => '#',
            'priority' => 10,
        ]
    );new \Kirki\Field\URL(
    [
        'settings' => 'instagram_URL',
        'label'    => esc_html__( 'instagram icon', 'kirki' ),
        'section'  => 'section_social',
        'default'  => '#',
        'priority' => 10,
    ]
);
    new \Kirki\Field\URL(
        [
            'settings' => 'twitter_URL',
            'label'    => esc_html__( 'twitter icon', 'kirki' ),
            'section'  => 'section_social',
            'default'  => '#',
            'priority' => 10,
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings' => 'pinterest_URL',
            'label'    => esc_html__( 'pinterest icon', 'kirki' ),
            'section'  => 'section_social',
            'default'  => '#',
            'priority' => 10,
        ]
    );

}

mytheme_top_info_secitons();
mytheme_top_social_section();

// Page section
/*
function mytheme_top_page_section (){
   new \Kirki\Section(
    'top_header_page',
    [
        'title'       => esc_html__( 'Top Header page', 'kirki' ),
        'description' => esc_html__( 'Fast have a page name then have a link', 'kirki' ),
        'panel'       => 'panel_top_header',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'page_01',
        'label'    => esc_html__( 'Page name 01', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => esc_html__( 'Faq', 'kirki' ),
        'priority' => 10,
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'page_01_URL',
        'label'    => esc_html__( 'Page 01 link', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => 'faq.html',
        'priority' => 10,
    ]
);new \Kirki\Field\Text(
    [
        'settings' => 'page_02',
        'label'    => esc_html__( 'Page name 02', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => esc_html__( 'Service', 'kirki' ),
        'priority' => 10,
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'page_02_URL',
        'label'    => esc_html__( 'Page 02 link', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => 'service.html',
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'page_03',
        'label'    => esc_html__( 'Page name 03', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => esc_html__( 'Contact', 'kirki' ),
        'priority' => 10,
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'page_03_URL',
        'label'    => esc_html__( 'Page 03 link', 'kirki' ),
        'section'  => 'top_header_page',
        'default'  => 'contact.html',
        'priority' => 10,
    ]
);
}
mytheme_top_page_section(); */

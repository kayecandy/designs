<?php
    const MENU_CONTENTS = [
        'logoImg'   => './assets/logo-text.png',
        'logoLink'  => './',

        'menuItems' => [
            [
                'text'  => 'Home',
                'link'  => './#home'
            ],
            [
                'text'  => 'Mint',
                'link'  => './#mint'
            ],
            [
                'text'  => 'Roadmap',
                'link'  => './#roadmap'
            ],
            [
                'text'  => 'Team',
                'link'  => './#team'
            ],
            [
                'text'  => 'FAQs',
                'link'  => './#faq'
            ]
            
        ],

        'background'            => COLORS[0],
        'color'                 => 'white',
        'sticky'                => false,

        'mobileBg'              => COLORS[0],
        'mobileSideBg'          => COLORS[1],
        'mobileColor'           => COLORS[0],

        'menuItemBg'            => 'transparent',
        'menuItemHoverBg'       => 'transparent',
        'menuItemHoverColor'    => COLORS[1],


        'connectionStatus'      => 'disconnected', /** 'connected' | 'disconnected' */

        'disconnectedText'      => 'Disconnected',
        'disconnectedBg'        => 'transparent',
        'disconnectedColor'     => '#585858',
        'disconnectedIconColor' => '#585858', 


        'connectedText'      => 'Connected',
        'connectedBg'        => 'transparent',
        'connectedColor'     => 'green',
        'connectedIconColor' => 'green' 
    ];

?>
<?php

    const BUY_POPUP_CONTENTS = [
        'id'                => 'buy-popup',
        
        'basePrice'         => 0.02,
        'priceIcon'         => 'assets/icon-adopt.svg',

        'minQty'            => 1,
        'maxQty'            => 20,

        'priceDivBg'        => COLORS[0],
        'priceDivColor'     => 'white',

        'qtyLabelStyle'     => 'font-size: 0.7rem; font-weight: 900; color: ' . COLORS[1],

        'loadingImg'        => 'assets/loading.gif',
        'loadingText'       => 'Check metamask!',
        'loadingBg'         => '#e0dee0',
        'loadingColor'      => '#3b393b',


        'congratsText'      => 'Congrats on Skull Kitty #XXX',
        'congratsColor'     => '#3b393b',
        'congratsLinks'     => [
            [
                'text'      => 'View TX',
                'href'      => '#'
            ],
            [
                'text'      => 'View on Opensea',
                'href'      => '#'
            ],
            [
                'text'      => 'Share on Twitter',
                'href'      => '#'
            ]
        ],
        'congratsLinksColor'=> '#3b393b'

    ];
?>
<?php 
    const TEAM_CONTENTS = [
        'id'            => 'team',
        'isTitleImg'                => false,
        'titleImg'                  => './assets/Team.svg',
        'titleText'                 => 'Team',
        'titleColor'                => COLORS[1],
        'titleTextTag'              => 'h1',
        'titleTextSize'             => '3.5rem',

        'colSize'                   => 4,

        'members'   => [
            [
                'name'          => 'Nolol',
                'description'   => 'Coding Ninja',
                'subtitle'      => '(Web Dev)',
                'img'           => './assets/nolol.png'
            ],
            [
                'name'          => 'kleck0',
                'description'   => 'Master of Coin',
                'subtitle'      => '(Token Master)',
                'img'           => './assets/klecko.png',
                'socials'       => [
                    'twitter'   => 'https://twitter.com'
                ]
            ],
            [
                'name'          => 'K3vin',
                'description'   => 'Collector of Bussiness',
                'subtitle'      => '(Biz Dev)',
                'img'           => './assets/k3vin.png'
            ]
        ]
    ];

?>
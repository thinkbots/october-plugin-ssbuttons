<?php

    return [

        'plugin' => [
            'name'              => 'Bouttons de partage sur Réseaux Sociaux',
            'description'       => 'Affiche les bouttons pour partager votre contenu sur différents réseaux sociaux',
            'permissions'       => 'Authentification unique pour le backend'
        ],

        'settings' => [
            'twitter'     => 'Twitter',
            'facebook'    => 'Facebook',
            'google+'     => 'Google+',
            'stumbleupon' => 'StumbleUpon',
            'linkedin'    => 'LinkedIn',
            'tumblr'      => 'Tumblr',
            'pinterest'   => 'Pinterest',
            'pocket'      => 'Pocket',
            'reddit'      => 'Reddit',
            'wordpress'   => 'WordPress',
            'pinboard'    => 'Pinboard',
            'email'       => 'Email',
        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Partager cette page',
                'description' => 'Affiche les bouttons pour partager la page active (Twitter Bootstrap requis)'
            ],
            'ssbuttonsnb' => [
                'name'        => 'Partager cette page (Alt)',
                'description' => 'Affiche les bouttons pour partager la page active (Twitter Bootstrap  n\'est pas necessaire)'
            ],
            'ssbuttonsssb' => [
                'name'        => 'Bouttons de partage Simple',
                'description' => 'Display buttons to share the current page (Plusieurs thèmes inclus)'
            ]
        ]

    ];

?>

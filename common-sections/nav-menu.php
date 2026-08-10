<?php
/* =====================================================================
   NAVIGATION — SINGLE SOURCE OF TRUTH

   Edit this file only. Both the desktop fly-out menu and the mobile
   drill-down drawer are rendered from this one tree by the functions in
   nav-render.php, so a label, a URL or a whole branch added here shows
   up in both without touching header.php.

   Item keys
     label     required. Link text.
     url       optional, defaults to '#'.
     children  optional. Nest as deep as the IA needs — both renderers
               are depth-agnostic.
     show      optional: 'both' (default), 'desktop' or 'mobile'.
               Use it for entries that only belong in one of the two,
               the way Home only makes sense inside the drawer.
     target    optional, e.g. '_blank'. Adds rel="noopener noreferrer".
   ===================================================================== */

$RIVETT_NAV = [

    // Drawer-only rows. The desktop header carries these as plain links
    // in the right-hand CTA block instead.
    [
        'label' => 'Home',
        'url'   => 'index.php',
        'show'  => 'mobile',
    ],
    [
        'label' => 'About',
        'url'   => 'about-us.php',
        'show'  => 'mobile',
    ],

    [
        'label'    => 'Residential Garage Doors',
        'url'      => 'residential-doors/Residential-Garage-Doors.php',
        'children' => [
            [
                'label'    => 'By Series',
                'url'      => '#',
                'children' => [
                    ['label' => 'Landmark Series',   'url' => '#'],
                    ['label' => 'Echo Ridge Series', 'url' => '#'],
                    ['label' => 'Rockwood Series',   'url' => '#'],
                    ['label' => 'Grandview Series',  'url' => '#'],
                    
                ],
            ],
            [
                'label'    => 'By Door Type',
                'url'      => '#',
                'children' => [
                    [
                        'label'    => 'Traditional Garage Doors',
                        'url'      => 'residential-doors/by-door-type/traditional.php',
                        'children' => [
                            [
                                'label' => 'Classic (L138)',
                                'url'   => 'residential-doors/by-door-type/traditional/classic-l138.php',
                            ],
                            [
                                'label' => 'Premium (L200)',
                                'url'   => 'residential-doors/by-door-type/traditional/premium-l200.php',
                            ],
                            [
                                'label' => 'Grandview (L200GV)',
                                'url'   => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
                            ],
                            [
                                'label' => 'Milestone Series',
                                'url'   => 'residential-doors/by-door-type/traditional/milestone-series.php',
                            ],
                            [
                                'label' => 'Canton',
                                'url'   => 'residential-doors/by-door-type/traditional/canton.php',
                            ],
                        ],
                    ],
                    [
                        'label'    => 'Contemporary Doors',
                        'url'      => 'residential-doors/by-door-type/contemporary.php',
                        'children' => [
                            [
                                'label' => 'Classic Contemporary (L138C)',
                                'url'   => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
                            ],
                            [
                                'label' => 'Premium Contemporary (L200C)',
                                'url'   => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
                            ],
                            [
                                'label' => 'Contemporary Rockwood (L200RW)',
                                'url'   => 'residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php',
                            ],
                        ],
                    ],
                    [
                        'label'    => 'Carriage House Doors',
                        'url'      => 'residential-doors/by-door-type/carriage-house.php',
                        'children' => [
                            [
                                'label' => 'Echo Ridge (L138ER)',
                                'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
                            ],
                            [
                                'label' => 'Briarcrest (L200BC)',
                                'url'   => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
                            ],
                            [
                                'label' => 'Echo Ridge XL (L200ERX)',
                                'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge-xl.php',
                            ],
                            [
                                'label' => 'Rockwood (L200RW)',
                                'url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
                            ],
                        ],
                    ],
                    [
                        'label'    => 'Custom Wood Doors',
                        'url'      => '#',
                        'children' => [
                            [
                                'label' => 'Rockwood (L200RW)',
                                'url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
                            ],
                            [
                                'label' => 'Contemporary Rockwood (L200RW)',
                                'url'   => 'residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php',
                            ],
                        ],
                    ],
                ],
            ],
            ['label' => 'Security Doors & Retractable Screens', 'url' => '#'],
            [
                'label'    => 'Openers',
                'url'      => '#',
                'children' => [
                    ['label' => 'LiftMaster Openers', 'url' => 'liftmaster.php'],
                    ['label' => 'Guardian Openers',   'url' => '#'],
                ],
            ],
            ['label' => 'Residential Parts & Service', 'url' => '#'],
        ],
    ],

    [
        'label'    => 'Commercial Overhead Doors',
        'url'      => 'commercial-overhead-doors.php',
        'children' => [
            ['label' => 'Overhead Doors',             'url' => '#'],
            ['label' => 'Rolling Steel',              'url' => '#'],
            ['label' => 'High-Speed Specialty Doors', 'url' => '#'],
            [
                'label'    => 'Operators',
                'url'      => '#',
                'children' => [
                    ['label' => 'LiftMaster Operators', 'url' => 'liftmaster.php'],
                    ['label' => 'Manaras Operators',    'url' => '#'],
                ],
            ],
            ['label' => 'Commercial Parts & Service', 'url' => '#'],
        ],
    ],

    [
        'label'    => 'Loading Docks',
        'url'      => '#',
        'children' => [
            ['label' => 'Dock Levelers',   'url' => '#'],
            ['label' => 'Dock Seal',       'url' => '#'],
            ['label' => 'Dock Shelters',   'url' => '#'],
            ['label' => 'Dock Enclosures', 'url' => '#'],
            ['label' => 'Bumpers',         'url' => '#'],
            ['label' => 'Accessories',     'url' => '#'],
        ],
    ],

    [
        'label'    => 'Security Shutters',
        'url'      => '#',
        'children' => [
            ['label' => 'Pentagon',            'url' => '#'],
            ['label' => 'Ultra Lite',          'url' => '#'],
            ['label' => 'Roll Pro',            'url' => '#'],
            ['label' => 'Retractable Screens', 'url' => '#'],
        ],
    ],

    [
        'label'    => 'Doors & Hardware',
        'url'      => '#',
        'children' => [
            ['label' => 'Hollow Metal & Steel Doors', 'url' => '#'],
            ['label' => 'Wood Doors',                 'url' => '#'],
            ['label' => 'Specialty Doors',            'url' => '#'],
            ['label' => 'Traffic & Impact Doors',     'url' => '#'],
            ['label' => 'Hardware & Parts',           'url' => '#'],
            ['label' => 'Commercial Parts & Service', 'url' => '#'],
        ],
    ],

];

/* The button pinned to the bottom of the mobile drawer. */
$RIVETT_NAV_CTA = [
    'label' => 'Emergency overhead door service',
    'url'   => 'contact-us.php',
];

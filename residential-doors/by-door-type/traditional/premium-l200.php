<?php
/**
 * Landmark™ Premium L200 — product page data.
 *
 * Content only. Every piece of layout — the banner, the gallery and its
 * lightbox, the Door Options tabs and the closing sections — lives in
 * common-sections/product-page.php, which this file hands $product to.
 * Adding a model means adding a data file like this one; it never means
 * copying markup.
 *
 * Copy fields are echoed as HTML so they can carry entities (&trade;,
 * &Prime;) and inline links. Image paths and URLs are escaped for you.
 */

/** Product photography downloaded from the reference site lives here,
    per doc/images.md. Prefixed onto every image path below. */
$img = 'src/images/residential/';

$product = [

    'title'         => 'Premium L200 Collection | 2″ Door, R-Value 18 | Rivett Architectural Hardware',
    'description'   => 'Quality, stylish, finger-protected garage doors. The Landmark™ Premium L200 is a 2″ '
                  . 'Neufoam™ polyurethane insulated garage door (R18) with 12 colour options and 8 panel '
                  . 'styles, supplied and installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Premium L200',
    'gallery_label' => 'Landmark Premium L200',
    'subtitle'      => 'Quality, Stylish, Garage Door',

    'intro'         => [
        'Add character and beauty to your home with our Premium panel styles. Authentic woodgrain '
            . 'texture embossed on the panels has the look of wood but the strength of steel. Customize '
            . 'with gorgeous windows. The perfect style to give your home the distinctive, elegant look it '
            . 'deserves.',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane Insulated <a '
            . 'href="residential-doors/by-door-type/traditional.php">Garage Door</a> (R18).',
        '12 Colour Options and 8 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'premium-l200-slider-1.webp',
            'alt' => 'Landmark Premium L200 garage doors with a Raised Ranch panel',
        ],
        [
            'src' => $img . 'premium-l200-slider-2.webp',
            'alt' => 'Landmark Premium L200 in a Flush panel with Ranch windows',
        ],
        [
            'src' => $img . 'premium-l200-slider-3.jpg',
            'alt' => 'Landmark Premium L200 garage doors on a stone-fronted home',
        ],
        [
            'src' => $img . 'premium-l200-slider-4.jpg',
            'alt' => 'Landmark Premium L200 garage doors in a dark woodgrain finish',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Raised Ranch',              'img' => $img . 'Raised-Ranch.webp'],
            ['name' => 'Raised Colonial',           'img' => $img . 'Raised-Colonial.webp'],
            ['name' => 'Flush',                     'img' => $img . 'Flush.webp'],
            ['name' => 'Plank',                     'img' => $img . 'Plank.webp'],
            ['name' => 'Mixed Panel',               'img' => $img . 'mixed-panel.webp'],
            ['name' => 'Recessed Grooved Colonial', 'img' => $img . 'Recessed-Grooved-Colonial.webp'],
            ['name' => 'Recessed Grooved Ranch',    'img' => $img . 'Recessed-Grooved-Ranch.webp'],
            ['name' => 'Recessed Ranch',            'img' => $img . 'Recessed%20Ranch.webp'],
            ],
            'note'    => '*Mixed Panel doors are available in many configurations. Talk to us to discuss the perfect '
                . 'look for your home.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'Almond',      'hex' => '#D2CAB4'],
            ['name' => 'Black',       'hex' => '#21201E'],
            ['name' => 'Bronze',      'hex' => '#665C50'],
            ['name' => 'Brown',       'hex' => '#463A2F'],
            ['name' => 'Café*',       'hex' => '#3B3933'],
            ['name' => 'Desert Tan',  'hex' => '#BFB6A4'],
            ['name' => 'Iron Ore*',   'hex' => '#303531'],
            ['name' => 'Sandstone',   'hex' => '#91887C'],
            ['name' => 'Slate Grey*', 'hex' => '#626260'],
            ['name' => 'White',       'hex' => '#FDF6EF'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*Not available in Recessed Grooved Colonial. Colours shown are a guide only &mdash; ask us '
                . 'for a physical sample before you choose.',
        ],

        'woodtones' => [
            'label'   => 'Woodtones',
            'heading' => 'Woodtones',
            'items' => [
            ['name' => 'Cocoa Hickory', 'img' => $img . 'Cocoa-Hickory.webp'],
            ['name' => 'Honey Cedar',   'img' => $img . 'Honey-Cedar.webp'],
            ],
            'modifier' => 'door-options-grid-swatch door-options-grid-grain',
            'note'    => '*The two woodtone finishes are counted within the 12 colour options available on the Premium '
                . 'L200.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Decorative Inserts',
                'desc'    => 'Make a style statement with our wide selection of designer window options.',
                'items'   => [
                    ['name' => 'CLEAR',                    'img' => $img . 'CLEAR.webp'],
                    ['name' => 'PRAIRIE',                  'img' => $img . 'PRAIRIE.webp'],
                    ['name' => 'PRAIRIE RANCH',            'img' => $img . 'PRAIRIE-RANCH.webp'],
                    ['name' => 'WATERTON',                 'img' => $img . 'WATERTON.webp'],
                    ['name' => 'CASCADE',                  'img' => $img . 'CASCADE.webp'],
                    ['name' => 'STOCKBRIDGE RANCH',        'img' => $img . 'STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'STOCKTON',                 'img' => $img . 'STOCKTON.webp'],
                    ['name' => 'ARCHED STOCKTON RANCH',    'img' => $img . 'ARCHED-STOCKTON-RANCH.webp'],
                    ['name' => 'CLEAR RANCH',              'img' => $img . 'CLEAR-RANCH.webp'],
                    ['name' => 'WATERTON RANCH',           'img' => $img . 'WATERTON-RANCH.webp'],
                    ['name' => 'CASCADE RANCH',            'img' => $img . 'CASCADE-RANCH.webp'],
                    ['name' => 'ARCHED STOCKBRIDGE RANCH', 'img' => $img . 'ARCHED-STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'STOCKTON RANCH',           'img' => $img . 'STOCKTON-RANCH.webp'],
                ],
            ],

            [
                'desc'  => 'Lites are available in single or double glazed clear glass, clear acrylic, '
                         . 'obscure glass (pinhead morocco) and obscure glass (glue chip).',
                'items' => [
                    ['name' => 'BRECKENRIDGE', 'img' => $img . 'BRECKENRIDGE.webp'],
                    ['name' => 'BERKSHIRE',    'img' => $img . 'BERKSHIRE.webp'],
                ],
            ],

            [
                'heading' => 'Round Bar',
                'desc'    => '3/8” (10 mm) round bars available in pewter. Standard with clear double glass; '
                           . 'obscure pinhead and satin glass optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4.webp'],
                    ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6.webp'],
                    ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10.webp'],
                    ['name' => 'PRAIRIE',       'img' => $img . 'prairie-1.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-1.webp'],
                ],
            ],

            [
                'heading' => 'Square Bar',
                'desc'    => '3/8” (10 mm) square bars available in black. Standard with clear double glass; '
                           . 'obscure pinhead and satin glass optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4-square.webp'],
                    ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6-square.webp'],
                    ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10-square.webp'],
                    ['name' => 'PRAIRIE',       'img' => $img . 'prairie-square.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-square.webp'],
                ],
            ],

            [
                'heading' => 'Aluminum Grid',
                'desc'    => '5/8” (16 mm) grids available in sandstone, desert tan, almond, bronze, brown, café, '
                           . 'slate grey, white and black. Standard with clear double glass; obscure pinhead and '
                           . 'satin is optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => $img . 'stockton-4-grid.webp'],
                    ['name' => 'STOCKTON 6',    'img' => $img . 'stockton-6-grid.webp'],
                    ['name' => 'STOCKTON 10',   'img' => $img . 'stockton-10-grid.webp'],
                    ['name' => 'PRAIRIE',       'img' => $img . 'prairie-grid.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => $img . 'prairie-ranch-grid.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*Not all window styles are available in all door sizes. Ask our team for details.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Premium L200, you&rsquo;ve chosen the best garage door '
                    . 'you can buy, and that is backed up in writing with the Limited Lifetimer&trade; Warranty.',
                'A door is only as good as its installation, so every Premium L200 we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Premium L200, or ask us to walk you '
                    . 'through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Landmark Product Catalogue',
                'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
                'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
            ],
            [
                'name' => 'Classic & Premium Brochure',
                'img'  => $img . 'classic-premium-brochure.jpg',
                'pdf'  => $img . 'classic-premium-brochure.pdf',
            ],
            [
                'name' => 'Mixed Panel Flyer',
                'img'  => $img . 'mixed-panel-flyer.jpg',
                'pdf'  => $img . 'mixed-panel-flyer.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

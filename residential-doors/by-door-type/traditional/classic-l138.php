<?php
/**
 * Landmark™ Classic L138 — product page data.
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

$product = [

    'title'         => 'Classic L138 Collection | 1 3/8″ Door, R-Value 12 | Rivett Architectural Hardware',
    'description'   => 'Beautiful, reliable, finger-protected garage doors. The Landmark™ Classic L138 is a '
                  . '1 3/8″ Neufoam™ polyurethane insulated garage door (R12) with 12 colour options and '
                  . '7 panel styles, supplied and installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Classic L138',
    'gallery_label' => 'Landmark Classic L138',
    'subtitle'      => 'Instant Curb-Appeal',

    'intro'         => [
        'Choose enduring quality and time-honoured style with any of our Classic panel options. '
            . 'Authentic woodgrain texture embossed on the panels has the look of wood but the strength of '
            . 'steel. You&rsquo;re guaranteed to find the perfect look to add value to your home and '
            . 'enhance its curb-appeal.',
    ],

    'bullets'       => [
        '1 3/8&Prime; Neufoam&trade; Polyurethane Insulated <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R12).',
        '12 Colour Options and 7 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => 'src/images/classic-l138-slider-1.webp',
            'alt' => 'Landmark Classic L138 garage doors on a two-car home',
        ],
        [
            'src' => 'src/images/classic-l138-slider-2.webp',
            'alt' => 'Landmark Classic L138 in Sandstone with a Raised Ranch panel',
        ],
        [
            'src' => 'src/images/classic-l138-slider-3.webp',
            'alt' => 'Landmark Classic L138 in Café with a Raised Ranch panel',
        ],
        [
            'src' => 'src/images/classic-l138-slider-4.webp',
            'alt' => 'Landmark Classic L138 in Black with a Recessed Ranch panel',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Raised Ranch',              'img' => 'src/images/Raised-Ranch.webp'],
            ['name' => 'Raised Colonial',           'img' => 'src/images/Raised-Colonial.webp'],
            ['name' => 'Flush',                     'img' => 'src/images/Flush.webp'],
            ['name' => 'Plank',                     'img' => 'src/images/Plank.webp'],
            ['name' => 'Recessed Grooved Colonial', 'img' => 'src/images/Recessed-Grooved-Colonial.webp'],
            ['name' => 'Recessed Grooved Ranch',    'img' => 'src/images/Recessed-Grooved-Ranch.webp'],
            ['name' => 'Recessed Ranch',            'img' => 'src/images/Recessed%20Ranch.webp'],
            ],
            'note'    => '*Authentic woodgrain texture is embossed on the panels, so every style has the look of wood '
                . 'but the strength of steel.',
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
            ['name' => 'Cocoa Hickory', 'img' => 'src/images/Cocoa-Hickory.webp'],
            ['name' => 'Honey Cedar',   'img' => 'src/images/Honey-Cedar.webp'],
            ],
            'modifier' => 'door-options-grid-swatch door-options-grid-grain',
            'note'    => '*The two woodtone finishes are counted within the 12 colour options available on the Classic '
                . 'L138.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Decorative Inserts',
                'desc'    => 'Make a style statement with our wide selection of designer window options.',
                'items'   => [
                    ['name' => 'CLEAR',                    'img' => 'src/images/CLEAR.webp'],
                    ['name' => 'PRAIRIE',                  'img' => 'src/images/PRAIRIE.webp'],
                    ['name' => 'PRAIRIE RANCH',            'img' => 'src/images/PRAIRIE-RANCH.webp'],
                    ['name' => 'WATERTON',                 'img' => 'src/images/WATERTON.webp'],
                    ['name' => 'CASCADE',                  'img' => 'src/images/CASCADE.webp'],
                    ['name' => 'STOCKBRIDGE RANCH',        'img' => 'src/images/STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'STOCKTON',                 'img' => 'src/images/STOCKTON.webp'],
                    ['name' => 'ARCHED STOCKTON RANCH',    'img' => 'src/images/ARCHED-STOCKTON-RANCH.webp'],
                    ['name' => 'CLEAR RANCH',              'img' => 'src/images/CLEAR-RANCH.webp'],
                    ['name' => 'WATERTON RANCH',           'img' => 'src/images/WATERTON-RANCH.webp'],
                    ['name' => 'CASCADE RANCH',            'img' => 'src/images/CASCADE-RANCH.webp'],
                    ['name' => 'ARCHED STOCKBRIDGE RANCH', 'img' => 'src/images/ARCHED-STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'STOCKTON RANCH',           'img' => 'src/images/STOCKTON-RANCH.webp'],
                ],
            ],

            [
                'desc'  => 'Lites are available in single or double glazed clear glass, clear acrylic, '
                         . 'obscure glass (pinhead morocco) and obscure glass (glue chip).',
                'items' => [
                    ['name' => 'BRECKENRIDGE', 'img' => 'src/images/BRECKENRIDGE.webp'],
                    ['name' => 'BERKSHIRE',    'img' => 'src/images/BERKSHIRE.webp'],
                ],
            ],

            [
                'heading' => 'Round Bar',
                'desc'    => '3/8” (10 mm) round bars available in pewter. Standard with clear double glass; '
                           . 'obscure pinhead and satin glass optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => 'src/images/stockton-4.webp'],
                    ['name' => 'STOCKTON 6',    'img' => 'src/images/stockton-6.webp'],
                    ['name' => 'STOCKTON 10',   'img' => 'src/images/stockton-10.webp'],
                    ['name' => 'PRAIRIE',       'img' => 'src/images/prairie-1.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => 'src/images/prairie-ranch-1.webp'],
                ],
            ],

            [
                'heading' => 'Square Bar',
                'desc'    => '3/8” (10 mm) square bars available in black. Standard with clear double glass; '
                           . 'obscure pinhead and satin glass optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => 'src/images/stockton-4-square.webp'],
                    ['name' => 'STOCKTON 6',    'img' => 'src/images/stockton-6-square.webp'],
                    ['name' => 'STOCKTON 10',   'img' => 'src/images/stockton-10-square.webp'],
                    ['name' => 'PRAIRIE',       'img' => 'src/images/prairie-square.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => 'src/images/prairie-ranch-square.webp'],
                ],
            ],

            [
                'heading' => 'Aluminum Grid',
                'desc'    => '5/8” (16 mm) grids available in sandstone, desert tan, almond, bronze, brown, café, '
                           . 'slate grey, white and black. Standard with clear double glass; obscure pinhead and '
                           . 'satin is optional.',
                'items'   => [
                    ['name' => 'STOCKTON 4',    'img' => 'src/images/stockton-4-grid.webp'],
                    ['name' => 'STOCKTON 6',    'img' => 'src/images/stockton-6-grid.webp'],
                    ['name' => 'STOCKTON 10',   'img' => 'src/images/stockton-10-grid.webp'],
                    ['name' => 'PRAIRIE',       'img' => 'src/images/prairie-grid.webp'],
                    ['name' => 'PRAIRIE RANCH', 'img' => 'src/images/prairie-ranch-grid.webp'],
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
                    . 'When you choose the Landmark&trade; Classic L138, you&rsquo;ve chosen the best garage door '
                    . 'you can buy, and that is backed up in writing with the Limited Lifetimer&trade; Warranty.',
                'A door is only as good as its installation, so every Classic L138 we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Classic L138, or ask us to walk you '
                    . 'through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Landmark Product Catalogue',
                'img'  => 'src/images/LandmarkProductCatalogueOct2024web.png',
                'pdf'  => 'src/images/LandmarkProductCatalogue_April-2026.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

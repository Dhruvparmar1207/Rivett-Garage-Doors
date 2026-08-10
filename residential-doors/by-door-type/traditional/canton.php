<?php
/**
 * Canton™ Series (S & SI) — product page data.
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

    'title'         => 'Canton™ Series (S & SI) | Non-Insulated & Polystyrene Garage Doors | Rivett Architectural Hardware',
    'description'   => 'Style and performance at an affordable price. The Canton™ Series comes in the non-insulated '
                  . 'S collection and the polystyrene insulated SI collection (R6.6), in two panel styles and four '
                  . 'colours, supplied and installed by Rivett Architectural Hardware.',

    'name'          => 'Canton&trade; Series (S &amp; SI)',
    'gallery_label' => 'Canton Series',
    'subtitle'      => 'Timeless Styling at an Affordable Price.',

    'intro'         => [
        'The clean, classic lines of our Colonial or Ranch panel styles will add instant charm and '
            . 'curb-appeal to your home. Authentic woodgrain texture embossed on the panels has the look of '
            . 'wood but the strength of steel.',
        'Canton comes in the non-insulated S collection and the polystyrene insulated SI collection. '
            . 'Add decorative insert windows and choose one of four colours to find the perfect look at the '
            . 'perfect price.',
    ],

    'bullets'       => [
        'Polystyrene Insulated <a href="residential-doors/by-door-type/traditional.php">Garage '
            . 'Door</a> (R6.6).',
        'Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.',
        '2 Panel Style and 4 Colours Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'canton-slider-1.webp',
            'alt' => 'Canton Series garage door with a Colonial panel style',
        ],
        [
            'src' => $img . 'canton-slider-2.webp',
            'alt' => 'Canton Series garage door with a Ranch panel style',
        ],
        [
            'src' => $img . 'canton-slider-3.webp',
            'alt' => 'Canton Series garage doors with decorative insert windows',
        ],
        [
            'src' => $img . 'canton-slider-4.webp',
            'alt' => 'Canton Series double garage door on a suburban home',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Colonial', 'img' => $img . 'canton-colonial.webp'],
            ['name' => 'Ranch',    'img' => $img . 'canton-ranch.webp'],
            ],
            'note'    => '*Authentic woodgrain texture is embossed on the panels, so both styles have the look of wood '
                . 'but the strength of steel.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'White',      'hex' => '#EFEBE7'],
            ['name' => 'Almond',     'hex' => '#BFB8A4'],
            ['name' => 'Desert Tan', 'hex' => '#AEA695'],
            ['name' => 'Brown',      'hex' => '#41342B'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*Colours shown are a guide only &mdash; ask us for a physical sample before you choose.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Decorative Inserts',
                'desc'    => 'Lites are available in single or double glazed clear glass, clear acrylic, '
                           . 'obscure glass (pinhead morocco) and obscure glass (glue chip).',
                'items'   => [
                    ['name' => 'CLEAR',                    'img' => $img . 'CLEAR.webp'],
                    ['name' => 'CLEAR RANCH',              'img' => $img . 'CLEAR-RANCH.webp'],
                    ['name' => 'SHERWOOD',                 'img' => $img . 'SHERWOOD.webp'],
                    ['name' => 'SUNBURST RANCH',           'img' => $img . 'SUNBURST-RANCH.webp'],
                    ['name' => 'PRAIRIE',                  'img' => $img . 'PRAIRIE.webp'],
                    ['name' => 'CATHEDRAL',                'img' => $img . 'CATHEDRAL.webp'],
                    ['name' => 'WATERTON',                 'img' => $img . 'WATERTON.webp'],
                    ['name' => 'WATERTON RANCH',           'img' => $img . 'WATERTON-RANCH.webp'],
                    ['name' => 'CASCADE',                  'img' => $img . 'CASCADE.webp'],
                    ['name' => 'CASCADE RANCH',            'img' => $img . 'CASCADE-RANCH.webp'],
                    ['name' => 'STOCKBRIDGE RANCH',        'img' => $img . 'STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'ARCHED STOCKBRIDGE RANCH', 'img' => $img . 'ARCHED-STOCKBRIDGE-RANCH.webp'],
                    ['name' => 'STOCKTON',                 'img' => $img . 'STOCKTON.webp'],
                    ['name' => 'STOCKTON RANCH',           'img' => $img . 'STOCKTON-RANCH.webp'],
                    ['name' => 'ARCHED STOCKTON RANCH',    'img' => $img . 'ARCHED-STOCKTON-RANCH.webp'],
                    ['name' => 'SUNBURST 4',               'img' => $img . 'SUNBURST-4.webp'],
                    ['name' => 'SUNBURST 5',               'img' => $img . 'SUNBURST-5.webp'],
                    ['name' => 'SUNBURST 6',               'img' => $img . 'SUNBURST-6.webp'],
                    ['name' => 'SUNBURST 7',               'img' => $img . 'SUNBURST-7.webp'],
                    ['name' => 'SUNBURST 8',               'img' => $img . 'SUNBURST-8.webp'],
                    ['name' => 'SUNBURST 9',               'img' => $img . 'SUNBURST-9.webp'],
                    ['name' => 'SUNRAY (4 PANEL)',         'img' => $img . 'SUNRAY-4-PANEL.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*Not all window styles are available in all door sizes. Ask our team for details.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Warranty &mdash; S/SI',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Canton&trade; Series, you&rsquo;ve chosen the best garage door you can '
                    . 'buy, and that is backed up in writing with a Limited Warranty*.',
            ],
            'list'    => [
                'Section Rust-through: Limited Lifetime*',
                'Track/Hardware: 5 Years',
                'Springs: 3 Years',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Talk to us for full warranty details. Every Canton we supply is fitted by Rivett&rsquo;s '
                . 'own factory-trained technicians.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Canton&trade; Series, or ask us to walk you through '
                    . 'it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Canton S & SI Sell Sheet',
                'img'  => $img . 'canton-sell-sheet.webp',
                'pdf'  => $img . 'canton-sell-sheet.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

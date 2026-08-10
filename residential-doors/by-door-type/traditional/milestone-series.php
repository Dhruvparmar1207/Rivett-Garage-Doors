<?php
/**
 * Milestone™ Series — product page data.
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

    'title'         => 'Milestone™ Series | 2″ Polystyrene-Insulated Garage Doors (R10) | Rivett Architectural Hardware',
    'description'   => 'The Milestone™ Series is a 2″ polystyrene-insulated garage door (R10) in traditional, modern '
                  . 'and carriage house styles, with seven panel styles and nine colour options, supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Milestone&trade; Series',
    'gallery_label' => 'Milestone Series',
    'subtitle'      => 'Durability Meets Strength with this Polystyrene-Insulated Garage Door Available in '
            . 'Traditional, Modern and Carriage House Styles',

    'bullets'       => [
        '2&Prime; Panel Thickness.',
        'R Value of R10*.',
        'Max Opening: 20&rsquo;0&Prime; wide x 10&prime; high.',
        '3-Layer polystyrene Insulation.',
        'Unique Gunite Surface Texture Embossing.',
        'Available in 7 Panel Styles on this <a '
            . 'href="residential-doors/by-door-type/traditional.php">Garage Door</a>.',
        'Nine Solid Colour Options Available.',
        'Single-Directional Woodtone Option Available.',
    ],

    'intro_note'    => '*Pending testing in accordance with DASMA TDS-163.',

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'milestone-slider-1.jpg',
            'alt' => 'Milestone Series garage doors in Black on a modern home',
        ],
        [
            'src' => $img . 'milestone-slider-2.jpg',
            'alt' => 'Milestone Series garage doors in Brown with carriage-style panels',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Ranch',             'img' => $img . 'milestone-ranch.png'],
            ['name' => 'Colonial',          'img' => $img . 'milestone-colonial.png'],
            ['name' => 'Ranch Carriage',    'img' => $img . 'milestone-ranch-carriage.png'],
            ['name' => 'Colonial Carriage', 'img' => $img . 'milestone-colonial-carriage.png'],
            ['name' => 'Flush',             'img' => $img . 'milestone-flush.png'],
            ['name' => 'Plank',             'img' => $img . 'milestone-plank.png'],
            ['name' => 'Shaker',            'img' => $img . 'milestone-shaker.png'],
            ],
            'note'    => '*Every Milestone panel carries the unique Gunite surface texture embossing, in traditional, '
                . 'modern and carriage house profiles.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'Black',      'hex' => '#3B3B3D'],
            ['name' => 'Brown',      'hex' => '#61524A'],
            ['name' => 'Desert Tan', 'hex' => '#C5BCAB'],
            ['name' => 'Grey',       'hex' => '#A7A7A5'],
            ['name' => 'Ivory',      'hex' => '#D8D2C2'],
            ['name' => 'Red',        'hex' => '#8C4445'],
            ['name' => 'Shale',      'hex' => '#8E7B6E'],
            ['name' => 'Taupe',      'hex' => '#A89B8B'],
            ['name' => 'White',      'hex' => '#E0E2E1'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*The swatches shown on monitors and printed materials may vary from the actual colour. For a '
                . 'true representation of the colour, visit our showroom.',
        ],

        'woodtones' => [
            'label'   => 'Woodtones',
            'heading' => 'Woodtones',
            'items' => [
            ['name' => 'Mocha', 'img' => $img . 'milestone-mocha.jpg'],
            ],
            'modifier' => 'door-options-grid-swatch door-options-grid-grain',
            'note'    => '*Mocha is the Milestone&rsquo;s single-directional woodtone option, offered alongside the '
                . 'nine solid colours.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Colonial Decorative Inserts',
                'items'   => [
                    ['name' => 'COLONIAL',             'img' => $img . 'milestone-win-colonial.webp'],
                    ['name' => 'PRAIRIE COLONIAL',     'img' => $img . 'milestone-win-prairie-colonial.webp'],
                    ['name' => 'WATERTON COLONIAL',    'img' => $img . 'milestone-win-waterton-colonial.webp'],
                    ['name' => 'CASCADE COLONIAL',     'img' => $img . 'milestone-win-cascade-colonial.webp'],
                    ['name' => 'STOCKBRIDGE COLONIAL', 'img' => $img . 'milestone-win-stockbridge-colonial.webp'],
                    ['name' => 'STOCKTON COLONIAL',    'img' => $img . 'milestone-win-stockton-colonial.webp'],
                ],
            ],

            [
                'heading' => 'Ranch Decorative Inserts',
                'items'   => [
                    ['name' => 'RANCH',                         'img' => $img . 'milestone-win-ranch.webp'],
                    ['name' => 'PRAIRIE RANCH',                 'img' => $img . 'milestone-win-prairie-ranch.webp'],
                    ['name' => 'WATERTON RANCH',                'img' => $img . 'milestone-win-waterton-ranch.webp'],
                    ['name' => 'CASCADE RANCH',                 'img' => $img . 'milestone-win-cascade-ranch.webp'],
                    ['name' => 'STOCKBRIDGE RANCH',             'img' => $img . 'milestone-win-stockbridge-ranch.webp'],
                    ['name' => 'ARCHED STOCKBRIDGE RANCH',      'img' => $img . 'milestone-win-arched-stockbridge-ranch.webp'],
                    ['name' => 'STOCKTON 10-PANE RANCH',        'img' => $img . 'milestone-win-stockton-10-pane-ranch.webp'],
                    ['name' => 'STOCKTON 8-PANE RANCH',         'img' => $img . 'milestone-win-stockton-8-pane-ranch.webp'],
                    ['name' => 'ARCHED STOCKTON 10-PANE RANCH', 'img' => $img . 'milestone-win-arched-stockton-10-pane-ranch.webp'],
                    ['name' => 'ARCHED STOCKTON 8-PANE RANCH',  'img' => $img . 'milestone-win-arched-stockton-8-pane-ranch.webp'],
                    ['name' => 'BRECKENRIDGE',                  'img' => $img . 'milestone-win-breckenridge.webp'],
                    ['name' => 'BERKSHIRE 8-PANE RANCH',        'img' => $img . 'milestone-win-berkshire-8-pane-ranch.webp'],
                    ['name' => 'BERKSHIRE 10-PANE RANCH',       'img' => $img . 'milestone-win-berkshire-10-pane-ranch.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*Insert families are matched to the panel style &mdash; Colonial inserts for the short '
                . 'panel, Ranch inserts for the long. Not all window styles are available in all door sizes; '
                . 'ask our team for details.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Milestone&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'The Milestone&trade; Series carries its own written warranty, and every door we supply is '
                    . 'fitted by Rivett&rsquo;s own factory-trained technicians.',
            ],
            'list'    => [
                '<a href="' . $img . 'milestone-warranty.pdf" target="_blank" '
                    . 'rel="noopener">Download the full Milestone&trade; warranty (PDF)</a>',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Milestone&trade; Series, or ask us to walk you '
                    . 'through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Milestone Series Sell Sheet',
                'img'  => $img . 'milestone-sell-sheet.jpg',
                'pdf'  => $img . 'milestone-sell-sheet.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

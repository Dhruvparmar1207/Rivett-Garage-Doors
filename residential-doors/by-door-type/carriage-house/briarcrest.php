<?php
/**
 * Landmark™ Briarcrest L200BC — product page data.
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

    'title'         => 'Briarcrest L200BC | Carriage House Garage Doors, 2″ R18 | Rivett Architectural Hardware',
    'description'   => 'The Landmark™ Briarcrest L200BC is a 2″ Neufoam™ polyurethane insulated carriage house '
                  . 'garage door (R18) with a 24″ top section showcasing extra-large windows, supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Briarcrest L200BC',
    'gallery_label' => 'Briarcrest L200BC',
    'subtitle'      => 'Extra Large Windows With Carriage House Style',

    'intro'         => [
        'A 24&Prime; (610mm) top section showcases exquisite window options in a wide selection of '
            . 'carriage house panel styles. Whether you choose the old-world craftsmanship of the Wrought '
            . 'Iron or the classic simplicity of 4-Over-4 Pane, 4 Pane or Clear, the view has just '
            . 'improved. The perfect balance between exceptional beauty and enduring quality, a Briarcrest '
            . 'garage door will transform your home from ordinary, to extraordinary.',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R18).',
        'Recessed Panel Design With Inlays to Provide a Carriage House Look.',
        '9 Colour Options and 5 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'briarcrest-slider-1.webp',
            'alt' => 'Briarcrest L200BC carriage house garage door in bronze with a Swing panel style',
        ],
        [
            'src' => $img . 'briarcrest-slider-2.webp',
            'alt' => 'Briarcrest L200BC in black with an A-Buck panel style',
        ],
        [
            'src' => $img . 'briarcrest-slider-3.webp',
            'alt' => 'Briarcrest L200BC in black with a Bi-Fold panel style',
        ],
        [
            'src' => $img . 'briarcrest-slider-4.webp',
            'alt' => 'Briarcrest L200BC in white with an X-Buck panel style',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'A-Buck',  'img' => $img . 'briarcrest-a-buck.webp'],
            ['name' => 'X-Buck',  'img' => $img . 'briarcrest-x-buck.webp'],
            ['name' => 'V-Buck',  'img' => $img . 'briarcrest-v-buck.webp'],
            ['name' => 'Swing',   'img' => $img . 'briarcrest-swing.webp'],
            ['name' => 'Bi-Fold', 'img' => $img . 'briarcrest-bi-fold.jpg'],
            ],
            'note'    => '*The carriage look comes from a recessed panel design with inlays, so there are no applied '
                . 'boards to maintain.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'Almond',     'hex' => '#D2CAB4'],
            ['name' => 'Black',      'hex' => '#21201E'],
            ['name' => 'Bronze',     'hex' => '#665C50'],
            ['name' => 'Brown',      'hex' => '#463A2F'],
            ['name' => 'Café',       'hex' => '#3B3933'],
            ['name' => 'Desert Tan', 'hex' => '#BFB6A4'],
            ['name' => 'Iron Ore',   'hex' => '#303531'],
            ['name' => 'Sandstone',  'hex' => '#91887C'],
            ['name' => 'Slate Grey', 'hex' => '#626260'],
            ['name' => 'White',      'hex' => '#FDF6EF'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*Colours shown are a guide only &mdash; ask us for a physical sample before you choose.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Rectangle',
                'items'   => [
                    ['name' => 'WROUGHT IRON',  'img' => $img . 'rectangle-wrought-iron.webp'],
                    ['name' => '4-OVER-4 PANE', 'img' => $img . 'rectangle-4-over-4.webp'],
                    ['name' => '4 PANE',        'img' => $img . 'rectangle-4-pane.webp'],
                    ['name' => 'CLEAR',         'img' => $img . 'rectangle-clear.webp'],
                ],
            ],

            [
                'heading' => 'Two-Piece Arch',
                'items'   => [
                    ['name' => 'WROUGHT IRON',  'img' => $img . 'two-piece-arch-wrought-iron.webp'],
                    ['name' => '4-OVER-4 PANE', 'img' => $img . 'two-piece-arch-4-over-4.webp'],
                    ['name' => '4 PANE',        'img' => $img . 'two-piece-arch-4-pane.webp'],
                    ['name' => 'CLEAR',         'img' => $img . 'two-piece-arch-clear.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*Windows sit in the enlarged 24&Prime; top section and are dual-pane insulated glass. Not '
                . 'all window styles are available in all door sizes &mdash; ask our team for details.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Briarcrest L200BC, you&rsquo;ve chosen the best garage '
                    . 'door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Briarcrest we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Briarcrest L200BC, or ask us to walk '
                    . 'you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Briarcrest Brochure',
                'img'  => $img . 'briarcrest-slider-1.webp',
                'pdf'  => $img . 'briarcrest-brochure.pdf',
            ],
            [
                'name' => 'Landmark Product Catalogue',
                'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
                'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

<?php
/**
 * Landmark™ Classic Contemporary L138C — product page data.
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

    'title'         => 'Classic Contemporary L138C | 1 3/8″ Door, R-Value 12 | Rivett Architectural Hardware',
    'description'   => 'The Landmark™ Classic Contemporary L138C takes the 1 3/8″ Neufoam™ polyurethane insulated '
                  . 'Classic panel (R12) and adds creative, modern window layouts, supplied and installed by '
                  . 'Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Classic Contemporary L138C',
    'gallery_label' => 'Classic Contemporary L138C',
    'subtitle'      => 'Modern. Classic. Magnificent.',

    'intro'         => [
        'The Classic Contemporary Collection takes the 1 3/8&Prime; Classic panel and gives you the '
            . 'option to configure the door with creative and modern window layouts.',
    ],

    'bullets'       => [
        '1 3/8&Prime; (R12) Neufoam&trade; Polyurethane Insulated <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a>.',
        'Features Customizable Window Placement for a Modern Look.',
        '12 Colour Options and 2 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'classic-contemporary-slider-1.webp',
            'alt' => 'Classic Contemporary L138C garage door with a Flush panel and modern window layout',
        ],
        [
            'src' => $img . 'classic-contemporary-slider-2.webp',
            'alt' => 'Classic Contemporary L138C garage door in black with a Plank panel',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Raised Ranch',    'img' => $img . 'Raised-Ranch.webp'],
            ['name' => 'Raised Colonial', 'img' => $img . 'Raised-Colonial.webp'],
            ['name' => 'Flush',           'img' => $img . 'Flush.webp'],
            ['name' => 'Plank',           'img' => $img . 'Plank.webp'],
            ['name' => 'Recessed Ranch',  'img' => $img . 'Recessed%20Ranch.webp'],
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
            ['name' => 'Iron Ore',    'hex' => '#303531'],
            ['name' => 'Sandstone',   'hex' => '#91887C'],
            ['name' => 'Slate Grey*', 'hex' => '#626260'],
            ['name' => 'White',       'hex' => '#FDF6EF'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*Available in Stucco and Woodgrain embossing. Colours shown are a guide only &mdash; ask us '
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
            'note'    => '*The two woodtone finishes are counted within the 12 colour options available on the Classic '
                . 'Contemporary L138C.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'heading' => 'Colonial',
                'items'   => [
                    ['name' => 'Layout 1', 'img' => $img . 'contemporary-colonial-layout-1.webp'],
                    ['name' => 'Layout 2', 'img' => $img . 'contemporary-colonial-layout-2.webp'],
                    ['name' => 'Layout 3', 'img' => $img . 'contemporary-colonial-layout-3.webp'],
                ],
            ],

            [
                'heading' => 'Ranch',
                'items'   => [
                    ['name' => 'Layout 1', 'img' => $img . 'contemporary-ranch-layout-1.webp'],
                    ['name' => 'Layout 2', 'img' => $img . 'contemporary-ranch-layout-2.webp'],
                    ['name' => 'Layout 3', 'img' => $img . 'contemporary-ranch-layout-3.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*These are whole-door window layouts rather than single inserts &mdash; window placement is '
                . 'customizable, so bring us the look you are after.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Classic Contemporary L138C, you&rsquo;ve chosen the best '
                    . 'garage door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Classic Contemporary we supply is '
                    . 'fitted by Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Classic Contemporary L138C, or ask '
                    . 'us to walk you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Classic & Premium Contemporary Brochure',
                'img'  => $img . 'classic-premium-contemporary-brochure.jpg',
                'pdf'  => $img . 'classic-premium-contemporary-brochure.pdf',
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

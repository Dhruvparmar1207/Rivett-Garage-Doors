<?php
/**
 * Landmark™ Echo Ridge L138ER — product page data.
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

    'title'         => 'Echo Ridge L138ER | Carriage House Garage Doors, 1 3/8″ R12 | Rivett Architectural Hardware',
    'description'   => 'Classic carriage house garage door styles. The Landmark™ Echo Ridge L138ER is a four-section '
                  . '1 3/8″ Neufoam™ polyurethane insulated door (R12) with Fibrex® overlay boards, supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Echo Ridge L138ER',
    'gallery_label' => 'Echo Ridge L138ER',
    'subtitle'      => 'Time Honoured Style.',

    'intro'         => [
        'A beautifully crafted door that has a vintage look, that&rsquo;s matched with '
            . 'technologically-advanced durability and strength. The best garage door to add period-charm '
            . 'with authentic-looking decorative hardware and five window insert options.',
    ],

    'bullets'       => [
        '1 3/8&Prime; Neufoam&trade; Polyurethane Insulated Carriage House <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R12).',
        'Four-Section Door With Carriage House With Fibrex&reg; Overlay Boards.',
        '9 Colour Options, 2 Overlay Colour Options and 5 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'echo-ridge-slider-1.webp',
            'alt' => 'Echo Ridge L138ER carriage house garage doors with overlay boards',
        ],
        [
            'src' => $img . 'echo-ridge-slider-2.webp',
            'alt' => 'Echo Ridge L138ER garage doors in white on a barn-style home',
        ],
        [
            'src' => $img . 'echo-ridge-slider-3.webp',
            'alt' => 'Echo Ridge L138ER in white with a Bi-Fold overlay style',
        ],
        [
            'src' => $img . 'echo-ridge-slider-4.webp',
            'alt' => 'Echo Ridge L138ER carriage house door with decorative hardware',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'overlay-styles' => [
            'label'   => 'Overlay Styles',
            'heading' => 'Overlay Styles',
            'items' => [
            ['name' => 'A-Buck',         'img' => $img . 'echo-ridge-a-buck.webp'],
            ['name' => 'X-Buck',         'img' => $img . 'echo-ridge-x-buck.webp'],
            ['name' => 'V-Buck',         'img' => $img . 'echo-ridge-v-buck.webp'],
            ['name' => 'Swing',          'img' => $img . 'echo-ridge-swing.webp'],
            ['name' => 'Bi-Fold',        'img' => $img . 'echo-ridge-bi-fold.webp'],
            ['name' => 'Double Bi-Fold', 'img' => $img . 'echo-ridge-double-bi-fold.webp'],
            ],
            'note'    => '*Each style is an arrangement of Fibrex&reg; overlay boards applied over the insulated steel '
                . 'section, and every one can be finished with decorative carriage hardware.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'Almond',     'hex' => '#D2CAB4'],
            ['name' => 'Bronze',     'hex' => '#665C50'],
            ['name' => 'Brown',      'hex' => '#463A2F'],
            ['name' => 'Desert Tan', 'hex' => '#BFB6A4'],
            ['name' => 'Sandstone',  'hex' => '#91887C'],
            ['name' => 'White',      'hex' => '#FDF6EF'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*Colours shown are a guide only &mdash; ask us for a physical sample before you choose.',
        ],

        'board-colours' => [
            'label'   => 'Board Colours',
            'heading' => 'Board Colours',
            'items' => [
            ['name' => 'White',     'img' => $img . 'echo-ridge-board-white.webp'],
            ['name' => 'Sandstone', 'img' => $img . 'echo-ridge-board-sandstone.webp'],
            ],
            'note'    => '*The Fibrex&reg; overlay boards are finished separately from the door, so you can contrast '
                . 'them against any of the door colours above.',
        ],

        'windows' => [
            'label'   => 'Windows',
            'groups' => [
            [
                'items' => [
                    ['name' => '1 PANE CLEAR',         'img' => $img . 'echo-ridge-win-1-pane-clear.webp'],
                    ['name' => '1 PANE ARCHED',        'img' => $img . 'echo-ridge-win-1-pane-arched.webp'],
                    ['name' => '3-OVER-3 PANE',        'img' => $img . 'echo-ridge-win-3-over-3-pane.webp'],
                    ['name' => '3-OVER-3 PANE ARCHED', 'img' => $img . 'echo-ridge-win-3-over-3-pane-arched.webp'],
                    ['name' => '3 PANE',               'img' => $img . 'echo-ridge-win-3-pane.webp'],
                ],
            ],
            ],
            'modifier' => 'door-options-grid-window',
            'note'    => '*All overlay options are available without windows.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Echo Ridge L138ER, you&rsquo;ve chosen the best garage '
                    . 'door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Echo Ridge we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by overlay style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Echo Ridge L138ER, or ask us to walk '
                    . 'you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Echo Ridge Brochure',
                'img'  => $img . 'echo-ridge-slider-1.webp',
                'pdf'  => $img . 'echo-ridge-brochure.pdf',
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

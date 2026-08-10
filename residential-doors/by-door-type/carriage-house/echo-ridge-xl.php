<?php
/**
 * Landmark™ Echo Ridge XL L200ERX — product page data.
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

    'title'         => 'Echo Ridge XL L200ERX | Carriage House Garage Doors, 2″ R18 | Rivett Architectural Hardware',
    'description'   => 'Classic carriage house garage door style with extra-large windows. The Landmark™ Echo Ridge '
                  . 'XL L200ERX is a three-section 2″ Neufoam™ polyurethane insulated door (R18) with Fibrex® '
                  . 'overlay boards, supplied and installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Echo Ridge XL L200ERX',
    'gallery_label' => 'Echo Ridge XL L200ERX',
    'subtitle'      => 'Enjoy The View',

    'intro'         => [
        'This unique three-section design makes it one of the best garage door options, with overlays '
            . 'in five styles offering numerous design combinations. Customize with decorative hardware and '
            . 'four window options to add period-charm and curb-appeal to your home.',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R18).',
        'Three-Section Door With Carriage House With Fibrex&reg; Overlay Boards.',
        '6 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'echo-ridge-xl-slider-1.webp',
            'alt' => 'Echo Ridge XL L200ERX carriage house garage doors with extra-large windows',
        ],
        [
            'src' => $img . 'echo-ridge-xl-slider-2.webp',
            'alt' => 'Echo Ridge XL L200ERX in white with a Bi-Fold overlay style',
        ],
        [
            'src' => $img . 'echo-ridge-xl-slider-3.webp',
            'alt' => 'Echo Ridge XL L200ERX in white with a Swing overlay style',
        ],
        [
            'src' => $img . 'echo-ridge-xl-slider-4.webp',
            'alt' => 'Echo Ridge XL L200ERX with a V-Buck overlay style',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'overlay-styles' => [
            'label'   => 'Overlay Styles',
            'heading' => 'Overlay Styles',
            'items' => [
            ['name' => 'A-Buck',         'img' => $img . 'echo-ridge-xl-a-buck.webp'],
            ['name' => 'V-Buck',         'img' => $img . 'echo-ridge-xl-v-buck.webp'],
            ['name' => 'X-Buck',         'img' => $img . 'echo-ridge-xl-x-buck.webp'],
            ['name' => 'Swing',          'img' => $img . 'echo-ridge-xl-swing.webp'],
            ['name' => 'Bi-Fold',        'img' => $img . 'echo-ridge-xl-bi-fold.webp'],
            ['name' => 'Double Bi-Fold', 'img' => $img . 'echo-ridge-xl-double-bi-fold.webp'],
            ],
            'note'    => '*Each style is an arrangement of Fibrex&reg; overlay boards applied over the insulated steel '
                . 'section, and every one can be finished with decorative carriage hardware.',
        ],

        'colours' => [
            'label'   => 'Colours',
            'heading' => 'Colours',
            'items' => [
            ['name' => 'White', 'hex' => '#FDF6EF'],
            ],
            'modifier' => 'door-options-grid-swatch',
            'note'    => '*On the XL the design variety comes from the overlay style and the board colour. Ask us if '
                . 'you need the door itself in another finish.',
        ],

        'board-colours' => [
            'label'   => 'Board Colours',
            'heading' => 'Board Colours',
            'items' => [
            ['name' => 'White',     'img' => $img . 'echo-ridge-board-white.webp'],
            ['name' => 'Sandstone', 'img' => $img . 'echo-ridge-board-sandstone.webp'],
            ],
            'note'    => '*The Fibrex&reg; overlay boards are finished separately from the door, so you can contrast '
                . 'them against the door colour.',
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
                    . 'When you choose the Landmark&trade; Echo Ridge XL L200ERX, you&rsquo;ve chosen the best '
                    . 'garage door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Echo Ridge XL we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'list'    => [
                '<a href="' . $img . 'landmark-rockwood-warranty.pdf" target="_blank" '
                    . 'rel="noopener">Download the full Echo Ridge XL warranty (PDF)</a>',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by overlay style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Echo Ridge XL L200ERX, or ask us to '
                    . 'walk you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Echo Ridge XL Brochure',
                'img'  => $img . 'echo-ridge-xl-slider-1.webp',
                'pdf'  => $img . 'echo-ridge-xl-brochure.pdf',
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

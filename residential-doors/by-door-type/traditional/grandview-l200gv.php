<?php
/**
 * Landmark™ Grandview Series L200GV — product page data.
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

    'title'         => 'Grandview Series L200GV | 2″ Door, R-Value 18, XL Windows | Rivett Architectural Hardware',
    'description'   => 'The Landmark™ Grandview L200GV is a 2″ Neufoam™ polyurethane insulated garage door (R18) '
                  . 'built with a 24″ top section to showcase extra-large dual-pane windows, supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Grandview Series L200GV',
    'gallery_label' => 'Landmark Grandview L200GV',
    'subtitle'      => 'Not Your Average Window, Not Your Average Door.',

    'intro'         => [
        'The Grandview is built with a 24&Prime; (610mm) top section to showcase our beautiful '
            . 'selection of extra-large windows. Choose Wrought Iron, 4-Over-4 Pane, 4 Pane or Clear to '
            . 'compliment your home&rsquo;s exterior and enhance its curb appeal. Exceptional quality and '
            . 'the opportunity to create many different looks with a wide variety of panel styles makes the '
            . 'Grandview a perfect choice for the discerning homeowner.',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane Insulated <a '
            . 'href="residential-doors/by-door-type/traditional.php">Garage Door</a> (R18).',
        'Featuring Large Dual-Pane Insulated Windows Providing Elegance to Your Home.',
        '12 Colour Options and 7 Panel Styles Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'grandview-l200gv-slider-1.webp',
            'alt' => 'Landmark Grandview L200GV garage door in white with extra-large top windows',
        ],
        [
            'src' => $img . 'grandview-l200gv-slider-2.webp',
            'alt' => 'Landmark Grandview L200GV garage doors on a two-car home',
        ],
        [
            'src' => $img . 'grandview-l200gv-slider-3.webp',
            'alt' => 'Landmark Grandview L200GV in black with a Raised Ranch panel',
        ],
        [
            'src' => $img . 'grandview-l200gv-slider-4.webp',
            'alt' => 'Landmark Grandview L200GV garage door with wrought iron window inserts',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Raised Ranch',              'img' => $img . 'grandview-raised-ranch.png'],
            ['name' => 'Raised Colonial',           'img' => $img . 'grandview-raised-colonial.jpg'],
            ['name' => 'Flush',                     'img' => $img . 'grandview-flush.webp'],
            ['name' => 'Plank',                     'img' => $img . 'grandview-plank.webp'],
            ['name' => 'Recessed Grooved Colonial', 'img' => $img . 'grandview-recessed-grooved-colonial.jpg'],
            ['name' => 'Recessed Grooved Ranch',    'img' => $img . 'grandview-recessed-grooved-ranch.webp'],
            ['name' => 'Recessed Ranch',            'img' => $img . 'grandview-recessed-ranch.webp'],
            ],
            'note'    => '*Every panel style is shown on the Grandview&rsquo;s enlarged 24&Prime; top section, so you '
                . 'can see how each one carries the XL windows.',
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
            'note'    => '*The two woodtone finishes are counted within the 12 colour options available on the '
                . 'Grandview L200GV.',
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
            'note'    => '*Windows are dual-pane insulated glass. Not all window styles are available in all door '
                . 'sizes &mdash; ask our team for details.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Grandview L200GV, you&rsquo;ve chosen the best garage '
                    . 'door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Grandview L200GV we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by panel style and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Grandview L200GV, or ask us to walk '
                    . 'you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Landmark Product Catalogue',
                'img'  => $img . 'LandmarkProductCatalogueOct2024web.png',
                'pdf'  => $img . 'LandmarkProductCatalogue_April-2026.pdf',
            ],
            [
                'name' => 'Grandview Brochure',
                'img'  => $img . 'grandview-brochure.jpg',
                'pdf'  => $img . 'grandview-brochure.pdf',
            ],
            ],
            'note'    => '*Need something that isn&rsquo;t listed here? Get in touch and we will send it over.',
        ],

    ],
];

require __DIR__ . '/../../../common-sections/product-page.php';

<?php
/**
 * Landmark™ Contemporary Rockwood L200RW — product page data.
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

    'title'         => 'Contemporary Rockwood L200RW | Modern Red Cedar Garage Doors | Rivett Architectural Hardware',
    'description'   => 'The Landmark™ Contemporary Rockwood L200RW pairs clear red cedar overlays with a 2″ Neufoam™ '
                  . 'polyurethane insulated steel panel (R19) for a total door thickness of 2 3/4″, supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Contemporary Rockwood L200RW',
    'gallery_label' => 'Contemporary Rockwood L200RW',
    'subtitle'      => 'Sophisticated Style, Unrivalled Craftsmanship.',

    'intro'         => [
        'A Rockwood three-section Carriage House door brings unparalleled warmth and individuality to '
            . 'your home. Custom crafted overlays of clear red cedar on our technologically-advanced, '
            . 'foam-insulated steel panels offer vintage style with unsurpassed structural integrity and a '
            . 'total door thickness of 2 3/4&Prime; (70mm).',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R19).',
        'Features 1&Prime; Cedar Board Applied to 2&Prime; Landmark Panel.',
        'Customizable Colours and Designs Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'rockwood-contemporary-slider-1.webp',
            'alt' => 'Contemporary Rockwood L200RW garage door with horizontal cedar overlays',
        ],
        [
            'src' => $img . 'rockwood-contemporary-slider-2.webp',
            'alt' => 'Contemporary Rockwood L200RW cedar garage doors on a modern home',
        ],
        [
            'src' => $img . 'rockwood-contemporary-slider-3.webp',
            'alt' => 'Contemporary Rockwood L200RW door with a clear red cedar finish',
        ],
        [
            'src' => $img . 'rockwood-contemporary-slider-4.webp',
            'alt' => 'Contemporary Rockwood L200RW double garage doors in cedar',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Style 3',         'img' => $img . 'rockwood-contemporary-style-3.webp'],
            ['name' => 'Style 4',         'img' => $img . 'rockwood-contemporary-style-4.webp'],
            ['name' => 'Style 6',         'img' => $img . 'rockwood-contemporary-style-6.webp'],
            ['name' => 'Style 8',         'img' => $img . 'rockwood-contemporary-style-8.webp'],
            ['name' => 'Style 10',        'img' => $img . 'rockwood-contemporary-style-10.webp'],
            ['name' => 'Style 12',        'img' => $img . 'rockwood-contemporary-style-12.webp'],
            ['name' => 'Style 15',        'img' => $img . 'rockwood-contemporary-style-15.webp'],
            ['name' => 'Style 16',        'img' => $img . 'rockwood-contemporary-style-16.webp'],
            ['name' => 'Style 21',        'img' => $img . 'rockwood-contemporary-style-21.webp'],
            ['name' => 'Design your own', 'img' => $img . 'rockwood-contemporary-design-your-own.webp'],
            ],
            'note'    => '*Each design is a 1&Prime; clear red cedar overlay applied to the 2&Prime; Landmark panel. '
                . 'If none of the numbered styles is quite right, bring us your own drawing &mdash; colours and '
                . 'designs are customizable.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Contemporary Rockwood L200RW, you&rsquo;ve chosen the '
                    . 'best garage door you can buy, and that is backed up in writing with the Limited '
                    . 'Lifetimer&trade; Warranty.',
                'A door is only as good as its installation, so every Contemporary Rockwood we supply is '
                    . 'fitted by Rivett&rsquo;s own factory-trained technicians.',
            ],
            'list'    => [
                '<a href="' . $img . 'landmark-rockwood-warranty.pdf" target="_blank" '
                    . 'rel="noopener">Download the full Rockwood warranty (PDF)</a>',
            ],
            'cta'     => ['label' => 'Ask About Coverage', 'url' => 'contact-us.php'],
            'note'    => '*Warranty terms vary by design and finish. Full details are supplied with your quote.',
        ],

        'literature' => [
            'label'   => 'Literature',
            'heading' => 'Literature',
            'paragraphs' => [
                'Download the product literature for the Landmark&trade; Contemporary Rockwood L200RW, or ask '
                    . 'us to walk you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Contemporary Rockwood Brochure',
                'img'  => $img . 'rockwood-contemporary-brochure.jpg',
                'pdf'  => $img . 'rockwood-contemporary-brochure.pdf',
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

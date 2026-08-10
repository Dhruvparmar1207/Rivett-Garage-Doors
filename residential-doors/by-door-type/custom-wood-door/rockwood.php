<?php
/**
 * Landmark™ Rockwood L200RW — product page data.
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

    'title'         => 'Rockwood L200RW | Custom Red Cedar Carriage House Garage Doors | Rivett Architectural Hardware',
    'description'   => 'Custom carriage house cedar overlay doors. The Landmark™ Rockwood L200RW pairs hand-crafted '
                  . 'red cedar overlays with a 2″ Neufoam™ polyurethane insulated steel panel (R19), supplied and '
                  . 'installed by Rivett Architectural Hardware.',

    'name'          => 'Landmark&trade; Rockwood L200RW',
    'gallery_label' => 'Rockwood L200RW',
    'subtitle'      => 'Sophisticated Style, Unrivalled Craftsmanship.',

    'intro'         => [
        'A Rockwood three-section Carriage House door brings unparalleled warmth and individuality to '
            . 'your home. While designed for residential appeal, its construction reflects the same '
            . 'craftsmanship found in <a href="commercial-overhead-doors.php">commercial garage doors</a>. '
            . 'Custom-crafted red cedar overlays covering our technologically advanced, foam-insulated '
            . 'steel panels offer vintage style with unsurpassed structural integrity.',
    ],

    'bullets'       => [
        '2&Prime; Neufoam&trade; Polyurethane Insulated Carriage House <a '
            . 'href="Residential-Garage-Doors.php">Garage Door</a> (R19).',
        'Features 1&Prime; Cedar Board Applied to 2&Prime; Landmark Panel.',
        'Customizable Colours and Designs Available.',
    ],

    /* Stage image, page thumbnails and popup thumbnails all come
       from this one array. */
    'gallery' => [
        [
            'src' => $img . 'rockwood-slider-1.webp',
            'alt' => 'Rockwood L200RW carriage house garage door with red cedar overlays',
        ],
        [
            'src' => $img . 'rockwood-slider-2.webp',
            'alt' => 'Rockwood L200RW garage doors in a black oak stain',
        ],
        [
            'src' => $img . 'rockwood-slider-3.webp',
            'alt' => 'Rockwood L200RW cedar carriage house doors on a stone-fronted home',
        ],
    ],

    /* Door Options. Key => panel; the first entry is the open tab. */
    'tabs' => [

        'panel-styles' => [
            'label'   => 'Panel Styles',
            'heading' => 'Panel Styles',
            'items' => [
            ['name' => 'Bentley',     'img' => $img . 'rockwood-bentley.webp'],
            ['name' => 'Bracebridge', 'img' => $img . 'rockwood-bracebridge.webp'],
            ['name' => 'Crosshill',   'img' => $img . 'rockwood-crosshill.webp'],
            ['name' => 'Linwood',     'img' => $img . 'rockwood-linwood.webp'],
            ['name' => 'Oxford',      'img' => $img . 'rockwood-oxford.webp'],
            ['name' => 'Shakespeare', 'img' => $img . 'rockwood-shakespeare.webp'],
            ['name' => 'Stratford',   'img' => $img . 'rockwood-stratford.webp'],
            ['name' => 'Waterloo',    'img' => $img . 'rockwood-waterloo.webp'],
            ],
            'note'    => '*Each design is a 1&Prime; cedar overlay applied to the 2&Prime; Landmark panel. Colours and '
                . 'designs are customizable &mdash; talk to us about building something to your own drawing.',
        ],

        'warranty' => [
            'label'   => 'Warranty',
            'heading' => 'Limited Lifetimer&trade; Warranty',
            'paragraphs' => [
                'There are enough worries in life &ndash; your garage door shouldn&rsquo;t be one of them. '
                    . 'When you choose the Landmark&trade; Rockwood L200RW, you&rsquo;ve chosen the best garage '
                    . 'door you can buy, and that is backed up in writing with the Limited Lifetimer&trade; '
                    . 'Warranty.',
                'A door is only as good as its installation, so every Rockwood we supply is fitted by '
                    . 'Rivett&rsquo;s own factory-trained technicians.',
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
                'Download the product literature for the Landmark&trade; Rockwood L200RW, or ask us to walk '
                    . 'you through it in our showroom.',
            ],
            'literature' => [
            [
                'name' => 'Rockwood Brochure',
                'img'  => $img . 'rockwood-brochure.jpg',
                'pdf'  => $img . 'rockwood-brochure.pdf',
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

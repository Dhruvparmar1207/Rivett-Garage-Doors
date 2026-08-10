<?php
/**
 * Contemporary Garage Doors — the "By Door Type" category page.
 *
 * Content only. The hero slider, the intro block, the model card grid and
 * the closing sections all live in common-sections/category-page.php,
 * which this file hands $category to. Adding a category means adding a
 * data file like this one; it never means copying markup.
 *
 * ESCAPING — two different rules:
 *   hero and model fields are ESCAPED, so write plain text with real
 *   characters (™, ″, ®), never HTML entities;
 *   intro heading and paragraphs are echoed as HTML, so they can carry
 *   entities and inline <a> links.
 */

$category = [

    'title'       => 'Contemporary Garage Doors | Stronger & Reliable | Rivett Architectural Hardware',
    'description' => 'Rivett supplies and installs the highest quality Canadian-made contemporary garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455',

    'hero_label'  => 'Contemporary garage doors',

    /* One entry per slide, in display order. */
    'hero' => [
        [
            'eyebrow'   => 'By Door Type',
            'heading'   => 'Contemporary Garage Doors',
            'text'      => 'Arrange windows in a variety of configurations for a clean, modern face — supplied, installed, and serviced by Rivett across Ontario.',
            'cta_label' => 'Get a Free Estimate',
            'cta_url'   => 'contact-us.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => 'Home with contemporary-style Rivett garage doors installed',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Premium Contemporary Garage Doors',
            'text'      => 'A 2″ Neufoam™ polyurethane insulated garage door (R18) with customizable window placement for a modern look.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Classic Contemporary Garage Doors',
            'text'      => 'The 1 3/8″ Classic panel (R12) with the option to configure the door with creative and modern window layouts.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
    ],

    'intro' => [
        'heading'    => 'Contemporary Garage Doors',
        'paragraphs' => [
            'Rivett&rsquo;s Contemporary garage door models allow the homeowner to arrange windows in a '
                . 'variety of configurations.',
            'We offer the <a '
                . 'href="residential-doors/by-door-type/contemporary-modern/classic-contemporary.php">Classic '
                . 'Contemporary</a> (1 3/8&Prime; &ndash; R12) and <a '
                . 'href="residential-doors/by-door-type/contemporary-modern/premium-contemporary.php">Premium '
                . 'Contemporary</a> (2&Prime; &ndash; R18) collections. Both doors are insulated with '
                . 'Neufoam&trade; polyurethane.',
        ],
    ],

    'models' => [
        'heading' => 'Contemporary Models Include',
        'items'   => [
            [
                'name'  => 'Classic Contemporary (L138C)',
                'img'   => 'src/images/classic-contemporary-l138c.webp',
                'alt'   => 'Landmark Classic Contemporary L138C garage door with a modern window layout',
                'url'   => 'residential-doors/by-door-type/contemporary-modern/classic-contemporary.php',
                'specs' => [
                    '1 3/8″ (R12) Neufoam™ Polyurethane Insulated Garage Door.',
                    'Features Customizable Window Placement for a Modern Look.',
                    '12 Colour Options and 2 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Premium Contemporary (L200C)',
                'img'   => 'src/images/premium-contemporary-l200c.webp',
                'alt'   => 'Landmark Premium Contemporary L200C garage door with full-width windows',
                'url'   => 'residential-doors/by-door-type/contemporary-modern/premium-contemporary.php',
                'specs' => [
                    '2″ (R18) Neufoam™ Polyurethane Insulated Garage Door.',
                    'Features Customizable Window Placement for a Modern Look.',
                    '12 Colour Options and 2 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Rockwood Contemporary (L200RWC)',
                'img'   => 'src/images/contemporary-rockwood-l200rw.webp',
                'alt'   => 'Landmark Contemporary Rockwood L200RW cedar garage door',
                'url'   => 'residential-doors/by-door-type/custom-wood-door/contemporary-rockwood.php',
                'specs' => [
                    '2″ Neufoam™ Polyurethane Garage Door (R19).',
                    'Features 1″ Cedar Board Applied to 2″ Landmark Panel.',
                    'Customizable Colours and Designs Available.',
                ],
            ],
        ],
    ],
];

require __DIR__ . '/../../common-sections/residental-category-page.php';

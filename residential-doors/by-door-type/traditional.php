<?php
/**
 * Traditional Garage Doors — the "By Door Type" category page.
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

    'title'       => 'Traditional Garage Doors | Stronger & Reliable | Rivett Architectural Hardware',
    'description' => 'Rivett supplies and installs the highest quality Canadian-made traditional garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455',

    'hero_label'  => 'Traditional garage doors',

    /* One entry per slide, in display order. */
    'hero' => [
        [
            'eyebrow'   => 'By Door Type',
            'heading'   => 'Traditional Garage Doors',
            'text'      => 'Stamped Ranch (long) or Colonial (short) patterns, in eight panel styles and a full range of colours — supplied, installed, and serviced by Rivett across Ontario.',
            'cta_label' => 'Get a Free Estimate',
            'cta_url'   => 'contact-us.php',
            'image'     => './src/images/Residental-banner-img.webp',
            'alt'       => 'Home with traditional-style Rivett garage doors installed',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Premium Garage Doors',
            'text'      => 'A 2″ Neufoam™ polyurethane insulated garage door (R18), with 12 colour options and 8 panel styles available.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/traditional/premium-l200.php',
            'image'     => './src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Milestone™ Series',
            'text'      => 'Two-sided steel with 2″ polystyrene insulation (R10), in 7 panel styles and 11 colour options.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/traditional/milestone-series.php',
            'image'     => './src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => "Grandview Garage Doors",
            'text'      => 'A 2″ door featuring an enlarged top section with exquisite XL windows, on the same Neufoam™ insulated panel (R18).',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
            'image'     => './src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
    ],

    'intro' => [
        'heading'    => 'Traditional Garage Doors',
        'paragraphs' => [
            'Rivett&rsquo;s Traditional garage doors feature stamped Ranch (long) or Colonial (short) '
                . 'patterns. Panel styles include Raised Ranch, Raised Colonial, Recessed Grooved Ranch, '
                . 'Recessed Grooved Colonial, Recessed Smooth Ranch and Mixed Panel. Traditional doors also '
                . 'feature Plank and Flush panel styles.',
            'Our Traditional models include the 1 3/8&Prime; (R12) <a '
                . 'href="residential-doors/by-door-type/traditional/classic-l138.php">Classic collection</a>, '
                . '2&Prime; (R18) <a href="residential-doors/by-door-type/traditional/premium-l200.php">Premium '
                . 'collection</a> and Grandview collection. The Grandview model is a 2&Prime; door featuring an '
                . 'enlarged top section with exquisite XL windows. These models all feature advanced '
                . 'Neufoam&trade; polyurethane insulation.',
            'We also offer the Milestone and Canton collections which feature polystyrene-insulated (R10 '
                . 'and R6.6) or non-insulated options.',
        ],
    ],

    'models' => [
        'heading' => 'Traditional Models Include',
        'items'   => [
            [
                'name'  => 'Classic (L138)',
                'img'   => 'src/images/classic-l138.webp',
                'alt'   => 'Landmark Classic L138 insulated steel garage door',
                'url'   => 'residential-doors/by-door-type/traditional/classic-l138.php',
                'specs' => [
                    '1 3/8″ Neufoam™ Polyurethane Insulated Garage Door (R12).',
                    '12 Colour Options and 7 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Premium (L200)',
                'img'   => 'src/images/premium-l200.webp',
                'alt'   => 'Landmark Premium L200 insulated steel garage door',
                'url'   => 'residential-doors/by-door-type/traditional/premium-l200.php',
                'specs' => [
                    '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
                    '12 Colour Options and 8 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Grandview (L200GV)',
                'img'   => 'src/images/grandview-l200gv.webp',
                'alt'   => 'Landmark Grandview L200GV garage door with large dual-pane windows',
                'url'   => 'residential-doors/by-door-type/traditional/grandview-l200gv.php',
                'specs' => [
                    '2” Neufoam™ Polyurethane Insulated Garage Door (R18).',
                    'Featuring Large Dual-Pane Insulated Windows Providing Elegance to Your Home.',
                    '12 Colour Options and 7 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Milestone Series',
                'img'   => 'src/images/milestone-series.webp',
                'alt'   => 'Landmark Milestone Series polystyrene insulated garage door',
                'url'   => 'residential-doors/by-door-type/traditional/milestone-series.php',
                'specs' => [
                    '2-Sided Steel With 2″ Polystyrene Insulation (R10).',
                    '7 Panel Styles and 11 Colour Options Available.',
                ],
            ],
            [
                'name'  => 'Canton',
                'img'   => 'src/images/canton.webp',
                'alt'   => 'Canton polystyrene insulated garage door',
                'url'   => 'residential-doors/by-door-type/traditional/canton.php',
                'specs' => [
                    'Polystyrene Insulated Garage Door (R6.6).',
                    'Single or Double-Sided Steel Non-Insulated Garage Doors Also Available.',
                    '2 Panel Style and 4 Colours Available.',
                ],
            ],
        ],
    ],
];

require __DIR__ . '/../../common-sections/residental-category-page.php';

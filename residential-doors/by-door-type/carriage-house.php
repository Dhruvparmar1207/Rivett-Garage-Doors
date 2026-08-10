<?php
/**
 * Carriage House Garage Doors — the "By Door Type" category page.
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

    'title'       => 'Carriage House Garage Doors | Stronger & Reliable | Rivett Architectural Hardware',
    'description' => 'Rivett supplies and installs the highest quality Canadian-made carriage house garage doors, '
                  . 'with exceptional customer service across Ontario since 1977. Call 1 (905) 668-4455',

    'hero_label'  => 'Carriage house garage doors',

    /* One entry per slide, in display order. */
    'hero' => [
        [
            'eyebrow'   => 'By Door Type',
            'heading'   => 'Carriage House Garage Doors',
            'text'      => 'A unique rural aesthetic in overlay boards, recessed inlays or custom cedar — supplied, installed, and serviced by Rivett across Ontario.',
            'cta_label' => 'Get a Free Estimate',
            'cta_url'   => 'contact-us.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => 'Home with carriage house style Rivett garage doors installed',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Briarcrest Garage Doors',
            'text'      => 'A 2″ (R18) door using a Recessed Smooth Ranch panel and inlays to create a variety of Carriage House patterns.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Echo Ridge Garage Doors',
            'text'      => 'Fibrex® overlay boards on a Neufoam™ polyurethane insulated panel, in a four-section 1 3/8″ door or the three-section 2″ XL.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
        [
            'eyebrow'   => 'Landmark™',
            'heading'   => 'Rockwood Garage Doors',
            'text'      => 'Customizable cedar overlays creating sophisticated style and extraordinary craftsmanship.',
            'cta_label' => 'View Product',
            'cta_url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
            'image'     => 'src/images/Residental-banner-img.webp',
            'alt'       => '',
        ],
    ],

    'intro' => [
        'heading'    => 'Carriage House Garage Doors',
        'paragraphs' => [
            'Rivett&rsquo;s Carriage House models all feature a unique rural aesthetic.',
            'The 2&Prime; (R18) <a '
                . 'href="residential-doors/by-door-type/carriage-house/briarcrest.php">Briarcrest</a> features '
                . 'a Recessed Smooth Ranch panel and inlays to create a variety of Carriage House patterns.',
            'Our <a href="residential-doors/by-door-type/carriage-house/echo-ridge.php">Echo Ridge</a> (1 '
                . '3/8&Prime; &ndash; R12) and our Three-Section <a '
                . 'href="residential-doors/by-door-type/carriage-house/echo-ridge-xl.php">Echo Ridge XL</a> '
                . '(2&Prime; &ndash; R18) feature Fibrex&reg; Overlay boards on our Neufoam&trade; Polyurethane '
                . 'insulated Garage Door panel.',
            'The elegant <a '
                . 'href="residential-doors/by-door-type/custom-wood-door/rockwood.php">Rockwood</a> (R19) '
                . 'Collection features customizable Cedar Overlay creating Sophisticated Style and '
                . 'Extraordinary Craftsmanship.',
        ],
    ],

    'models' => [
        'heading' => 'Carriage House Models Include',
        'items'   => [
            [
                'name'  => 'Echo Ridge (L138ER)',
                'img'   => 'src/images/echo-ridge-l138er.webp',
                'alt'   => 'Landmark Echo Ridge L138ER carriage house garage door',
                'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge.php',
                'specs' => [
                    '1 3/8″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R12).',
                    'Four-Section Door With Carriage House With Fibrex® Overlay Boards.',
                    '9 Colour Options, 2 Overlay Colour Options and 5 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Briarcrest (L200BC)',
                'img'   => 'src/images/briarcrest-l200bc.webp',
                'alt'   => 'Landmark Briarcrest L200BC carriage house garage door',
                'url'   => 'residential-doors/by-door-type/carriage-house/briarcrest.php',
                'specs' => [
                    '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
                    'Recessed Panel Design With Inlays to Provide a Carriage House Look.',
                    '9 Colour Options and 5 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Echo Ridge XL (L200ERX)',
                'img'   => 'src/images/echo-ridge-xl-l200erx.webp',
                'alt'   => 'Landmark Echo Ridge XL L200ERX three-section carriage house garage door',
                'url'   => 'residential-doors/by-door-type/carriage-house/echo-ridge-xl.php',
                'specs' => [
                    '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R18).',
                    'Three-Section Door With Carriage House With Fibrex® Overlay Boards.',
                    '6 Panel Styles Available.',
                ],
            ],
            [
                'name'  => 'Rockwood (L200RW)',
                'img'   => 'src/images/rockwood-l200rw.webp',
                'alt'   => 'Landmark Rockwood L200RW cedar carriage house garage door',
                'url'   => 'residential-doors/by-door-type/custom-wood-door/rockwood.php',
                'specs' => [
                    '2″ Neufoam™ Polyurethane Insulated Carriage House Garage Door (R19).',
                    'Features 1″ Cedar Board Applied to 2″ Landmark Panel.',
                    'Customizable Colours and Designs Available.',
                ],
            ],
        ],
    ],
];

require __DIR__ . '/../../common-sections/residental-category-page.php';

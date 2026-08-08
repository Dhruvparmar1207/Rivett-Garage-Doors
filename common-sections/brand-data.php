<?php
/* =====================================================================
   BRAND PAGES — SINGLE SOURCE OF TRUTH

   Every brand page (liftmaster.php, wayne-dalton.php, …) is the same
   template — brand-page.php — rendered against one entry of the array
   below. Adding a brand is: add an entry here, drop a 3-line page file
   next to the others, and the nav / brand strip pick it up. No section
   markup is ever duplicated.

   ---------------------------------------------------------------------
   ENTRY SHAPE  (every key optional unless marked required)

   'name'          required. Plain text, ® included: 'LiftMaster®'.
   'url'           required. Page file, e.g. 'liftmaster.php'.
   'logo'          required. ['src','alt','width','height'] — the
                   wordmark, reused by the hero card and the brand strip.
   'dealer_label'  Caption under the hero logo. Default 'Authorized Dealer'.
   'meta'          ['title','description'] for <head>.

   'intro'         The hero. ['heading','paragraphs'=>[], 'badges'=>[]]
                   badge: ['title','text','mark','logo'=>['src','alt']]
                   — 'logo' is optional; when the file is missing the
                   'mark' text renders in its place (see brand-render.php).

   'partner'       Image + copy band.
                   ['heading','paragraphs'=>[],'image'=>[…],'cta'=>['label','url']]

   'featured'      Card grid.
                   ['heading','intro','items'=>[ ['title','text',
                     'image'=>['src','alt'], 'fit'=>'', 'url'=>'',
                     'link_label'=>''] ]]
                   'url' is optional — supply it and the card grows a
                   "View More" link; omit it and the card stays flat,
                   the way the reference design shows it.
                   'fit' is 'contain' by default, which is right for an
                   isolated product on white. Use 'cover' for a
                   photograph that should fill the card edge to edge.

   ---------------------------------------------------------------------
   IMAGES

   Product photography lives in src/images/brands/<slug>/. Where a file
   is not on disk yet the card renders a neutral, correctly-sized
   placeholder instead of a broken image, so the grid never shifts.
   Drop the real .webp in at the referenced path and it appears — no
   code change.

   ---------------------------------------------------------------------
   COPY

   The LiftMaster entry follows the approved design. The other five are
   built to the same structure with category-accurate copy and should be
   reviewed against the client's current product line-up before launch —
   they are marked REVIEW COPY below.
   ===================================================================== */

$RIVETT_BRANDS = [

    /* =================================================================
       LIFTMASTER — the reference design
       ================================================================= */
    'liftmaster' => [
        'name'         => 'LiftMaster®',
        'url'          => 'liftmaster.php',
        'dealer_label' => 'Authorized Dealer',

        'logo' => [
            'src'    => 'src/images/brand-liftmaster-icon.webp',
            'alt'    => 'LiftMaster',
            'width'  => 292,
            'height' => 35,
        ],

        'meta' => [
            'title'       => 'LiftMaster® Garage Door Openers | Authorized Dealer | Rivett Architectural Hardware',
            'description' => 'Rivett is an authorized LiftMaster® dealer. Wi-Fi wall-mount, belt drive and chain drive garage door openers supplied, installed and serviced across Durham Region, the GTA and Kingston.',
        ],

        'intro' => [
            'heading'    => 'LiftMaster® Garage Door Openers',
            'paragraphs' => [
                'For homeowners looking for advanced, high-performance garage door openers, LiftMaster® is the industry leader. Rivett is an authorized dealer, and our own technicians handle the installation, service and repairs — so one company stands behind both the opener and the door it moves.',
                'Whether you need a Wi-Fi-enabled opener, a powerful belt drive or a chain drive with battery backup, we will help you find the LiftMaster opener that fits your home.',
            ],
            'badges' => [
                [
                    'mark'  => 'myQ',
                    'title' => 'Openers connected to',
                    'text'  => 'Works with myQ® App',
                    'logo'  => [
                        'src' => 'src/images/brands/liftmaster/myq-logo.webp',
                        'alt' => 'myQ',
                    ],
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'LiftMaster® Openers, Installed and Looked After by Rivett.',
            'paragraphs' => [
                'LiftMaster® builds the openers. We make sure you end up with the right one — correctly sized, correctly installed, and with working parts from one supplier. Our technicians walk you through the options in person at the Whitby showroom, or over the phone if you already know what you want.',
                'A quiet belt drive for the garage under the bedroom. A chain drive for the workshop out back. A wall mount to reclaim the ceiling. Whatever your garage asks for, we will match it and stand behind the work.',
            ],
            'image' => [
                'src'    => 'src/images/rivett-architact.webp',
                'alt'    => 'Rivett Architectural Hardware Ltd. storefront in Whitby, Ontario',
                'width'  => 800,
                'height' => 530,
            ],
            'cta' => ['label' => 'Get a Free Estimate', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured LiftMaster® Openers',
            'intro'   => 'A few of the most popular models we install. Ask us to match one to your door.',
            'items'   => [
                [
                    'title' => 'LiftMaster 98022',
                    'text'  => 'Premium Series DC Battery Backup Wall Mount Wi-Fi Garage Door Opener.',
                    'image' => ['src' => 'src/images/brands/liftmaster/liftmaster-98022.webp', 'alt' => 'LiftMaster 98022 wall mount garage door opener'],
                ],
                [
                    'title' => 'LiftMaster 98032',
                    'text'  => 'Premium Series Heavy Duty DC Battery Backup Wall Mount Wi-Fi Garage Door Opener.',
                    'image' => ['src' => 'src/images/brands/liftmaster/liftmaster-98032.webp', 'alt' => 'LiftMaster 98032 heavy duty wall mount garage door opener'],
                ],
                [
                    'title' => 'LiftMaster 6580L',
                    'text'  => 'LiftMaster 1 HP Belt Drive Opener with Battery Backup and myQ® Connectivity.',
                    'image' => ['src' => 'src/images/brands/liftmaster/liftmaster-6580l.webp', 'alt' => 'LiftMaster 6580L belt drive garage door opener'],
                ],
                [
                    'title' => 'LiftMaster 2220L',
                    'text'  => '3/4 HP Chain Drive Opener with Built-In Camera and myQ® Connectivity.',
                    'image' => ['src' => 'src/images/brands/liftmaster/liftmaster-2220l.webp', 'alt' => 'LiftMaster 2220L chain drive garage door opener'],
                ],
            ],
        ],
    ],


    /* =================================================================
       RICHARDS-WILCOX — REVIEW COPY
       Door photography already lives in src/images, so these cards run
       on real assets.
       ================================================================= */
    'richards-wilcox' => [
        'name'         => 'Richards-Wilcox',
        'url'          => 'richards-wilcox.php',
        'dealer_label' => 'Authorized Dealer',

        'logo' => [
            'src'    => 'src/images/brand-richards-wilcox-icon.webp',
            'alt'    => 'Richards-Wilcox',
            'width'  => 286,
            'height' => 70,
        ],

        'meta' => [
            'title'       => 'Richards-Wilcox Garage Doors | Authorized Dealer | Rivett Architectural Hardware',
            'description' => 'Rivett supplies and installs Richards-Wilcox insulated steel garage doors — Classic, Premium, Grandview and Echo Ridge — across Durham Region, the GTA and Kingston.',
        ],

        'intro' => [
            'heading'    => 'Richards-Wilcox Garage Doors',
            'paragraphs' => [
                'Richards-Wilcox has built garage doors in Canada for well over a century, for Canadian winters in particular. Their insulated steel doors carry Neufoam™ polyurethane cores, thermal breaks and finishes chosen to hold up outdoors here.',
                'Rivett carries the full residential line-up — traditional, contemporary and carriage house — in twelve colours and a range of panel profiles and window options.',
            ],
            'badges' => [
                [
                    'mark'  => 'CA',
                    'title' => 'Built in Canada',
                    'text'  => 'Doors made for Canadian winters',
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'Richards-Wilcox Doors, Measured and Installed by Rivett.',
            'paragraphs' => [
                'A garage door is only as good as its installation. We measure the opening, confirm the headroom, size the springs to the finished door weight, and set the tracks so the door runs quietly for years rather than months.',
                'Come see the panel profiles, colours and window inserts in person at the Whitby showroom, or send us your opening sizes and we will come to you.',
            ],
            'image' => [
                'src'    => 'src/images/rivett-architact.webp',
                'alt'    => 'Rivett Architectural Hardware Ltd. storefront in Whitby, Ontario',
                'width'  => 800,
                'height' => 530,
            ],
            'cta' => ['label' => 'Get a Free Estimate', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured Richards-Wilcox Doors',
            'intro'   => 'Four of the series we install most often. Every model is available in a full range of colours and panel styles.',
            'items'   => [
                [
                    'title' => 'Classic (L138)',
                    'text'  => '1 3/8″ Neufoam™ polyurethane insulated garage door (R12), in 12 colours and 7 panel styles.',
                    'image' => ['src' => 'src/images/classic-l138.webp', 'alt' => 'Richards-Wilcox Classic L138 garage door'],
                    'fit'   => 'cover',
                ],
                [
                    'title' => 'Premium (L200)',
                    'text'  => '2″ Neufoam™ polyurethane insulated garage door (R18), in 12 colours and 8 panel styles.',
                    'image' => ['src' => 'src/images/premium-l200.webp', 'alt' => 'Richards-Wilcox Premium L200 garage door'],
                    'fit'   => 'cover',
                ],
                [
                    'title' => 'Grandview (L200GV)',
                    'text'  => '2″ Neufoam™ insulated door (R18) with large dual-pane insulated windows.',
                    'image' => ['src' => 'src/images/grandview-l200gv.webp', 'alt' => 'Richards-Wilcox Grandview L200GV garage door'],
                    'fit'   => 'cover',
                ],
                [
                    'title' => 'Echo Ridge (L138ER)',
                    'text'  => 'Four-section carriage house door (R12) with Fibrex® overlay boards.',
                    'image' => ['src' => 'src/images/echo-ridge-l138er.webp', 'alt' => 'Richards-Wilcox Echo Ridge L138ER carriage house garage door'],
                    'fit'   => 'cover',
                ],
            ],
        ],
    ],


    /* =================================================================
       WAYNE DALTON — REVIEW COPY
       ================================================================= */
    'wayne-dalton' => [
        'name'         => 'Wayne Dalton',
        'url'          => 'wayne-dalton.php',
        'dealer_label' => 'Authorized Dealer',

        'logo' => [
            'src'    => 'src/images/brand-wayne-dalton-icon.webp',
            'alt'    => 'Wayne Dalton',
            'width'  => 290,
            'height' => 54,
        ],

        'meta' => [
            'title'       => 'Wayne Dalton Garage & Commercial Doors | Rivett Architectural Hardware',
            'description' => 'Rivett supplies and installs Wayne Dalton residential garage doors and commercial sectional and rolling steel doors across Ontario.',
        ],

        'intro' => [
            'heading'    => 'Wayne Dalton Garage & Commercial Doors',
            'paragraphs' => [
                'Wayne Dalton builds both sides of what we do: residential garage doors for the home, and sectional and rolling steel doors for the loading bay. One manufacturer, one parts supply, one warranty conversation.',
                'Rivett quotes, installs and services the line across Durham Region, the GTA, Kingston and Eastern Ontario — homeowners and facility managers alike.',
            ],
            'badges' => [
                [
                    'mark'  => 'R&C',
                    'title' => 'Residential and commercial',
                    'text'  => 'One supplier for both divisions',
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'Wayne Dalton Doors, Supplied and Serviced by Rivett.',
            'paragraphs' => [
                'From a single garage door on a new build to a full bank of commercial sectional doors, we handle the specification, the install and the service calls afterwards with our own technicians.',
                'Tell us the opening, the cycle count and the environment, and we will put the right door in front of you rather than the one that happens to be in stock.',
            ],
            'image' => [
                'src'    => 'src/images/rivett-architact.webp',
                'alt'    => 'Rivett Architectural Hardware Ltd. storefront in Whitby, Ontario',
                'width'  => 800,
                'height' => 530,
            ],
            'cta' => ['label' => 'Get a Free Estimate', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured Wayne Dalton Doors',
            'intro'   => 'A cross-section of the line-up we install. Ask us to match a model to your opening.',
            'items'   => [
                [
                    'title' => 'Insulated Steel Garage Doors',
                    'text'  => 'Foamed-in-place polyurethane residential doors in a range of panel profiles and colours.',
                    'image' => ['src' => 'src/images/brands/wayne-dalton/insulated-steel-doors.webp', 'alt' => 'Wayne Dalton insulated steel garage door'],
                ],
                [
                    'title' => 'Carriage House Doors',
                    'text'  => 'Overlay and composite carriage house styling on a modern insulated steel section.',
                    'image' => ['src' => 'src/images/brands/wayne-dalton/carriage-house-doors.webp', 'alt' => 'Wayne Dalton carriage house garage door'],
                ],
                [
                    'title' => 'Commercial Sectional Doors',
                    'text'  => 'Steel and aluminium sectional doors sized for warehouse, shop and dock openings.',
                    'image' => ['src' => 'src/images/brands/wayne-dalton/commercial-sectional-doors.webp', 'alt' => 'Wayne Dalton commercial sectional door'],
                ],
                [
                    'title' => 'Rolling Steel Doors',
                    'text'  => 'Service doors and counter shutters for high-cycle and space-restricted openings.',
                    'image' => ['src' => 'src/images/brands/wayne-dalton/rolling-steel-doors.webp', 'alt' => 'Wayne Dalton rolling steel service door'],
                ],
            ],
        ],
    ],


    /* =================================================================
       SARGENT — REVIEW COPY
       ================================================================= */
    'sargent' => [
        'name'         => 'Sargent',
        'url'          => 'sargent.php',
        'dealer_label' => 'Authorized Distributor',

        'logo' => [
            'src'    => 'src/images/brand-sargent-icon.webp',
            'alt'    => 'Sargent',
            'width'  => 211,
            'height' => 59,
        ],

        'meta' => [
            'title'       => 'Sargent Commercial Door Hardware | Rivett Architectural Hardware',
            'description' => 'Rivett supplies and specifies Sargent mortise locks, exit devices, cylindrical locks and door closers for commercial and institutional projects across Ontario.',
        ],

        'intro' => [
            'heading'    => 'Sargent Commercial Door Hardware',
            'paragraphs' => [
                'Sargent hardware is specified where doors are opened thousands of times a month — schools, hospitals, municipal buildings and offices. Mortise locks, exit devices, cylindrical locks and closers, all on one keying system.',
                'Rivett\'s hardware division supplies Sargent to contractors, architects and building owners, and writes the hardware schedule to match the door and frame package.',
            ],
            'badges' => [
                [
                    'mark'  => 'HW',
                    'title' => 'Hardware Division',
                    'text'  => 'Specification and scheduling included',
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'Sargent Hardware, Specified and Supplied by Rivett.',
            'paragraphs' => [
                'Hardware goes wrong on paper long before it goes wrong on site. We read the drawings, build the hardware schedule opening by opening, and confirm the function, finish and keying before anything is ordered.',
                'Doors, frames and finishing hardware arrive from one supplier, scheduled to your site dates — with the same people available when a lock needs attention two years later.',
            ],
            'image' => [
                'src'    => 'src/images/showroom-interior.webp',
                'alt'    => 'Architectural hardware display inside the Rivett showroom',
                'width'  => 800,
                'height' => 680,
            ],
            'cta' => ['label' => 'Request a Hardware Quote', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured Sargent Hardware',
            'intro'   => 'The product families we specify most often on commercial and institutional projects.',
            'items'   => [
                [
                    'title' => '8200 Series Mortise Locks',
                    'text'  => 'Heavy-duty mortise locks for high-traffic commercial and institutional openings.',
                    'image' => ['src' => 'src/images/brands/sargent/8200-mortise-locks.webp', 'alt' => 'Sargent 8200 Series mortise lock'],
                ],
                [
                    'title' => '80 Series Exit Devices',
                    'text'  => 'Rim, mortise, surface and concealed vertical rod exit devices for egress openings.',
                    'image' => ['src' => 'src/images/brands/sargent/80-series-exit-devices.webp', 'alt' => 'Sargent 80 Series exit device'],
                ],
                [
                    'title' => '10 Line Cylindrical Locks',
                    'text'  => 'Grade 1 cylindrical locksets in a full range of functions, levers and finishes.',
                    'image' => ['src' => 'src/images/brands/sargent/10-line-cylindrical-locks.webp', 'alt' => 'Sargent 10 Line cylindrical lockset'],
                ],
                [
                    'title' => '351 Series Door Closers',
                    'text'  => 'Surface-mounted closers with adjustable spring power for barrier-free compliance.',
                    'image' => ['src' => 'src/images/brands/sargent/351-door-closers.webp', 'alt' => 'Sargent 351 Series surface door closer'],
                ],
            ],
        ],
    ],


    /* =================================================================
       DAYBAR — REVIEW COPY
       Product names are deliberately category-level here; confirm the
       current Daybar catalogue with the client before publishing.
       ================================================================= */
    'daybar' => [
        'name'         => 'Daybar',
        'url'          => 'daybar.php',
        'dealer_label' => 'Authorized Distributor',

        'logo' => [
            'src'    => 'src/images/brand-daybar-icon.webp',
            'alt'    => 'Daybar',
            'width'  => 295,
            'height' => 39,
        ],

        'meta' => [
            'title'       => 'Daybar Hollow Metal Doors & Frames | Rivett Architectural Hardware',
            'description' => 'Rivett supplies Daybar hollow metal doors, steel frames and fire-rated assemblies for commercial and institutional projects across Ontario.',
        ],

        'intro' => [
            'heading'    => 'Daybar Hollow Metal Doors & Frames',
            'paragraphs' => [
                'Hollow metal is what stands up when a door has to take abuse, hold a fire rating and still close properly on a Monday morning. Daybar doors and frames are the backbone of the commercial openings we supply.',
                'Rivett takes the door, the frame and the finishing hardware from one place, prepped to suit each other, so nothing has to be modified on site.',
            ],
            'badges' => [
                [
                    'mark'  => 'UL',
                    'title' => 'Fire-rated assemblies',
                    'text'  => 'Labelled doors and frames available',
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'Daybar Doors and Frames, Supplied and Prepped by Rivett.',
            'paragraphs' => [
                'We take off the openings from your drawings, prep the doors and frames for the exact hardware being installed, and deliver them as a package scheduled to your site dates.',
                'One supplier for the door, the frame, the hardware and the service call afterwards — which is the whole point of keeping both divisions under one roof.',
            ],
            'image' => [
                'src'    => 'src/images/showroom-interior.webp',
                'alt'    => 'Architectural hardware display inside the Rivett showroom',
                'width'  => 800,
                'height' => 680,
            ],
            'cta' => ['label' => 'Request a Project Quote', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured Daybar Products',
            'intro'   => 'Commercial door and frame assemblies we supply on institutional, industrial and retail projects.',
            'items'   => [
                [
                    'title' => 'Hollow Metal Doors',
                    'text'  => 'Insulated and honeycomb-core steel doors in flush and glazed configurations.',
                    'image' => ['src' => 'src/images/brands/daybar/hollow-metal-doors.webp', 'alt' => 'Daybar hollow metal door'],
                ],
                [
                    'title' => 'Steel Door Frames',
                    'text'  => 'Welded and knock-down frames prepped for the hardware being installed.',
                    'image' => ['src' => 'src/images/brands/daybar/steel-door-frames.webp', 'alt' => 'Daybar steel door frame'],
                ],
                [
                    'title' => 'Fire-Rated Assemblies',
                    'text'  => 'Labelled door and frame assemblies for rated corridors, stairwells and service rooms.',
                    'image' => ['src' => 'src/images/brands/daybar/fire-rated-assemblies.webp', 'alt' => 'Daybar fire-rated door assembly'],
                ],
                [
                    'title' => 'Borrowed Lites & Sidelites',
                    'text'  => 'Glazed steel screens and sidelites to match the surrounding frame package.',
                    'image' => ['src' => 'src/images/brands/daybar/borrowed-lites.webp', 'alt' => 'Daybar borrowed lite steel screen'],
                ],
            ],
        ],
    ],


    /* =================================================================
       SCHLAGE — REVIEW COPY
       ================================================================= */
    'schlage' => [
        'name'         => 'Schlage',
        'url'          => 'schlage.php',
        'dealer_label' => 'Authorized Distributor',

        'logo' => [
            'src'    => 'src/images/brand-schlage-icon.webp',
            'alt'    => 'Schlage',
            'width'  => 287,
            'height' => 70,
        ],

        'meta' => [
            'title'       => 'Schlage Locks & Door Hardware | Rivett Architectural Hardware',
            'description' => 'Rivett supplies Schlage mortise locks, cylindrical locks, deadbolts and high-security cylinders for commercial, institutional and residential projects across Ontario.',
        ],

        'intro' => [
            'heading'    => 'Schlage Locks & Door Hardware',
            'paragraphs' => [
                'Schlage covers the full range, from a Grade 1 mortise lock on a hospital corridor to a deadbolt on a front door. That breadth is why so many of our hardware schedules are written around it.',
                'Rivett supplies Schlage to contractors, architects and building owners, and can key an entire building to one system — including the doors we did not supply.',
            ],
            'badges' => [
                [
                    'mark'  => 'KEY',
                    'title' => 'Master keying',
                    'text'  => 'Whole-building keying systems',
                ],
            ],
        ],

        'partner' => [
            'heading'    => 'Schlage Hardware, Specified and Keyed by Rivett.',
            'paragraphs' => [
                'Getting the lock right is only half of it. The function has to suit how the room is used, the finish has to match the rest of the floor, and the keying has to make sense to whoever carries the keys.',
                'We work all of that out with you before the order goes in, then supply the doors, frames and hardware together on one delivery.',
            ],
            'image' => [
                'src'    => 'src/images/showroom-interior.webp',
                'alt'    => 'Architectural hardware display inside the Rivett showroom',
                'width'  => 800,
                'height' => 680,
            ],
            'cta' => ['label' => 'Request a Hardware Quote', 'url' => 'contact-us.php'],
        ],

        'featured' => [
            'heading' => 'Featured Schlage Hardware',
            'intro'   => 'The Schlage families we carry and specify most often.',
            'items'   => [
                [
                    'title' => 'L-Series Mortise Locks',
                    'text'  => 'Grade 1 mortise locks for heavy-traffic commercial and institutional openings.',
                    'image' => ['src' => 'src/images/brands/schlage/l-series-mortise-locks.webp', 'alt' => 'Schlage L-Series mortise lock'],
                ],
                [
                    'title' => 'ND-Series Cylindrical Locks',
                    'text'  => 'Grade 1 cylindrical locksets in a wide range of functions and lever designs.',
                    'image' => ['src' => 'src/images/brands/schlage/nd-series-cylindrical-locks.webp', 'alt' => 'Schlage ND-Series cylindrical lock'],
                ],
                [
                    'title' => 'B-Series Deadbolts',
                    'text'  => 'Single and double cylinder deadbolts for residential and light commercial doors.',
                    'image' => ['src' => 'src/images/brands/schlage/b-series-deadbolts.webp', 'alt' => 'Schlage B-Series deadbolt'],
                ],
                [
                    'title' => 'Primus® High-Security Cylinders',
                    'text'  => 'Patented key control for openings where key duplication has to be restricted.',
                    'image' => ['src' => 'src/images/brands/schlage/primus-cylinders.webp', 'alt' => 'Schlage Primus high-security cylinder'],
                ],
            ],
        ],
    ],

];

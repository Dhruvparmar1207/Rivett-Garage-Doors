<?php
/* =====================================================================
   COMMERCIAL HARDWARE — SINGLE SOURCE OF TRUTH

   Thermatite, Alumatite and Polytite ship on the same hardware package,
   so the fourteen standard items and the six hardware photographs are
   described here once. Each series page includes this file and renders
   the list inside its own "Standard / Optional Hardware" tab, adding
   only the optional items that differ between the series.

   Include it with an absolute path — the series pages sit one level
   under the project root:

     require_once __DIR__ . '/../common-sections/commercial-hardware.php';

   rv_attr() comes from common-sections/product-options.php, which every
   page that uses this one already loads for the option-card renderer.
   The function_exists() guard keeps the file safe to include twice.
   ===================================================================== */

/** The fourteen standard hardware items, in the order the range is specified. */
$RIVETT_COMMERCIAL_HARDWARE = [
    [
        'name' => 'Weatherstripping',
        'text' => 'Full length retainer and bulb weather strip minimize air flow and ensure '
                . 'weather-tightness at the base of your door.',
    ],
    [
        'name' => 'Trussing',
        'text' => 'Doors are constructed to withstand wind load specified in ANSI/DASMA 108. Linear '
                . 'style trusses are provided according to door size. Additional trussing can be '
                . 'provided for higher wind load applications.',
    ],
    [
        'name' => 'Track',
        'text' => 'Roll formed from commercial galvanized steel. Vertical tracks sloped to ensure '
                . 'weather tight seal. Horizontal track curve available in 12″ (305mm) or normally '
                . 'provided 16″ (406mm) radius.',
    ],
    [
        'name' => 'Track Brackets',
        'text' => 'Bolted type, field adjustable, rib reinforced, stamped from 0.123″ (3.1 mm) thick '
                . 'commercial galvanized steel.',
    ],
    [
        'name' => 'Rollers',
        'text' => 'Ten ball bearings provide years of smooth and quiet operation. 7/16″ (11mm) '
                . 'diameter standard stem, long stem on doors over 16’-2″ (4928mm) wide.',
    ],
    [
        'name' => 'Counter Balance',
        'text' => 'Helically wound torsion springs manufactured from oil tempered spring wire, stress '
                . 'relieved, minimum 10,000 cycles. Aluminum die-cast grooved drums. Flexible 7 x 19 '
                . 'construction aircraft type galvanized cables with 5:1 safety factor. Higher cycle '
                . 'available upon request.',
    ],
    [
        'name' => 'Horizontal Angle',
        'text' => '72″ (1829 mm) long or 90″ (2286mm) for 3″ hardware.',
    ],
    [
        'name' => 'Hinges',
        'text' => 'Linear type, fabricated from 0.078″ or 0.106″ (2 or 2.7mm) thick zinc plated steel '
                . 'with embossments designed to resist higher load and provide greater stability '
                . 'resulting in improved performance.',
    ],
    [
        'name' => 'Top Roller Carrier',
        'text' => 'Fabricated from zinc plated steel designed to provide greater stability, field '
                . 'adjustable to ensure weather tight seal.',
    ],
    [
        'name' => 'Roller Brackets',
        'text' => 'Linear type fabricated from 0.078″ or 0.106″ (2 or 2.7mm) zinc plated steel. '
                . 'Graduated type design to ensure weather tight seal.',
    ],
    [
        'name' => 'Shafts',
        'text' => '1″ (25mm) diameter 0.078″ (2mm) tube or 1/8″ (3mm) wall keyed full length or 1″ '
                . '(25mm) diameter cold rolled galvanized steel keyed full length.',
    ],
    [
        'name' => 'Head Plates',
        'text' => 'Full height fabricated from galvanized steel, complete with bolt-on type bearings.',
    ],
    [
        'name' => 'Lock',
        'text' => 'Interior slide bolt type.',
    ],
    [
        'name' => 'Mounting Fasteners',
        'text' => 'Zinc plated.',
    ],
];

/**
 * The hardware photographs, shown above the list as an option-card grid.
 * The exhaust port and step plate are optional items, so a series whose
 * optional list omits one filters this array on the 'key' before
 * rendering — see the Polytite page, which has no step plate.
 */
$RIVETT_COMMERCIAL_HARDWARE_MEDIA = [
    ['key' => 'hinge',          'name' => 'Hinges',         'img' => 'src/images/commercial/hardware-hinge.webp'],
    ['key' => 'track',          'name' => 'Track',          'img' => 'src/images/commercial/hardware-track.webp'],
    ['key' => 'rollers',        'name' => 'Rollers',        'img' => 'src/images/commercial/hardware-rollers.webp'],
    ['key' => 'counter-balance','name' => 'Counter Balance','img' => 'src/images/commercial/hardware-counter-balance.webp'],
    ['key' => 'step-plate',     'name' => 'Step Plate',     'img' => 'src/images/commercial/hardware-step-plate.webp'],
    ['key' => 'exhaust-port',   'name' => 'Exhaust Port',   'img' => 'src/images/commercial/hardware-exhaust-port.webp'],
];

if (!function_exists('rv_render_hardware_list')) :

    /**
     * The standard hardware specification, as a name + description list.
     * Reuses .door-options-list so the tab panel matches the residential
     * product pages rather than introducing a second list treatment.
     */
    function rv_render_hardware_list($items)
    {
        ?>
        <ul class="door-options-list">
            <?php foreach ($items as $item) : ?>
                <li>
                    <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                    <span><strong><?php echo rv_attr($item['name']); ?></strong> &mdash;
                        <?php echo rv_attr($item['text']); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
    }

    /**
     * Filters the hardware photographs down to the keys a series offers.
     * Keeps the declared order of $RIVETT_COMMERCIAL_HARDWARE_MEDIA
     * rather than the order the keys are passed in.
     */
    function rv_hardware_media($media, array $keys)
    {
        return array_values(array_filter($media, static function ($item) use ($keys) {
            return in_array($item['key'], $keys, true);
        }));
    }

endif;

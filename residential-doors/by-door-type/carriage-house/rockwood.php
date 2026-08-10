<?php
/**
 * Rockwood — category alias.
 *
 * The Rockwood L200RW belongs to two branches of the door-type tree: it is a
 * custom cedar door AND a carriage house one, and the residential listing page
 * shows it under "Carriage House Garage Doors" while the reference range files
 * it under Custom Cedar. Both paths therefore need to resolve.
 *
 * Only ONE of them holds the page, so the copy, the eight overlay designs and
 * the literature never drift apart and search engines never see the same
 * content on two URLs. This file is the alias; the page itself lives at:
 *
 *     residential-doors/by-door-type/custom-wood-door/rockwood.php
 *
 * To flip which path is canonical, move the page file and swap the target
 * below — nothing else needs to change, because every link in the nav and on
 * the listing page points at whichever URL you set here.
 *
 * 301 rather than 302: the canonical location is a permanent decision, so
 * link equity should follow it. Its sibling
 * contemporary-modern/contemporary-rockwood.php works the same way.
 */

$canonical = '/rivett/residential-doors/by-door-type/custom-wood-door/rockwood.php';

header('Location: ' . $canonical, true, 301);

/* Belt and braces: a bot or browser that ignores the redirect still gets a
   real link rather than a blank page. Nothing below runs in a normal request. */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rockwood L200RW | Rivett Architectural Hardware</title>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="noindex, follow">
</head>
<body>
    <p>This page has moved to
        <a href="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">Rockwood L200RW</a>.</p>
</body>
</html>

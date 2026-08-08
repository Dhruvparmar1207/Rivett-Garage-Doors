<?php
/* =====================================================================
   NAVIGATION RENDERERS

   Two functions, one tree (common-sections/nav-menu.php). Each emits the
   markup its own system already expects, so the existing CSS and JS keep
   working untouched:

     rivett_desktop_nav()  ul.main-nav-list > li.has-sub > ul.nav-submenu
                           — the hover fly-out driven by custom.js.

     rivett_mobile_nav()   li.mobile-drop-list > span + div.sub-menu >
                           ul.main-inner-sub-menu — the slide-in drill-down
                           drawer, modelled on the reference markup in
                           index.html: each level is a full-screen panel
                           headed by its parent's name, with a Back bar
                           injected by custom.js.

   Both recurse, so nesting a branch one level deeper in nav-menu.php
   needs no change here.
   ===================================================================== */

if (!function_exists('rivett_nav_e')) {

    /** Escape for HTML text and attribute values. */
    function rivett_nav_e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }

    /** Basename of the page being served, e.g. "about-us". */
    function rivett_nav_current_page()
    {
        static $page = null;
        if ($page === null) {
            $page = basename($_SERVER['PHP_SELF'], '.php');
        }
        return $page;
    }

    /** True when this item points at the page currently being served. */
    function rivett_nav_is_current(array $item)
    {
        if (empty($item['url']) || $item['url'] === '#') {
            return false;
        }
        $target = strtok(basename($item['url']), '?#');
        return $target !== ''
            && strcasecmp(pathinfo($target, PATHINFO_FILENAME), rivett_nav_current_page()) === 0;
    }

    /** True when the item or anything below it is the current page. */
    function rivett_nav_in_trail(array $item, $context)
    {
        if (rivett_nav_is_current($item)) {
            return true;
        }
        foreach (rivett_nav_children($item, $context) as $child) {
            if (rivett_nav_in_trail($child, $context)) {
                return true;
            }
        }
        return false;
    }

    /** Items of $list that belong in $context ('desktop' or 'mobile'). */
    function rivett_nav_filter(array $list, $context)
    {
        $keep = [];
        foreach ($list as $item) {
            $show = isset($item['show']) ? $item['show'] : 'both';
            if ($show === 'both' || $show === $context) {
                $keep[] = $item;
            }
        }
        return $keep;
    }

    /** Children of $item that belong in $context. */
    function rivett_nav_children(array $item, $context)
    {
        return empty($item['children'])
            ? []
            : rivett_nav_filter($item['children'], $context);
    }

    /** target/rel pair, only when the item asked for one. */
    function rivett_nav_target(array $item)
    {
        if (empty($item['target'])) {
            return '';
        }
        return ' target="' . rivett_nav_e($item['target']) . '" rel="noopener noreferrer"';
    }


    /* ---------------------------------------------------------------
       DESKTOP
       --------------------------------------------------------------- */

    /**
     * @param array $items  nav tree (or a branch of it)
     * @param int   $depth  0 renders the top bar, deeper renders a fly-out
     */
    function rivett_desktop_nav(array $items, $depth = 0)
    {
        $items = rivett_nav_filter($items, 'desktop');
        if (!$items) {
            return;
        }

        $indent = str_repeat('  ', $depth + 5);
        echo $depth === 0
            ? '<ul class="main-nav-list">'
            : "\n{$indent}<ul class=\"nav-submenu\">";

        foreach ($items as $item) {
            $children = rivett_nav_children($item, 'desktop');
            $classes  = [];

            if ($children) {
                $classes[] = 'has-sub';
            }
            if (rivett_nav_in_trail($item, 'desktop')) {
                $classes[] = 'is-active-trail';
            }

            $li = $classes ? ' class="' . implode(' ', $classes) . '"' : '';
            $a  = rivett_nav_is_current($item) ? ' class="active"' : '';

            // aria-expanded is kept in step with .is-open by custom.js.
            $aria = $children ? ' aria-haspopup="true" aria-expanded="false"' : '';

            echo "\n{$indent}  <li{$li}>";
            echo "\n{$indent}    <a href=\"" . rivett_nav_e(isset($item['url']) ? $item['url'] : '#') . '"'
                . $a . rivett_nav_target($item) . $aria . '>'
                . rivett_nav_e($item['label']) . '</a>';

            if ($children) {
                rivett_desktop_nav($children, $depth + 1);
            }

            echo "\n{$indent}  </li>";
        }

        echo "\n{$indent}</ul>";
    }


    /* ---------------------------------------------------------------
       MOBILE
       --------------------------------------------------------------- */

    /**
     * The drawer's root list. A branch with children becomes a
     * li.mobile-drop-list: a <span> trigger that slides its own
     * div.sub-menu panel in from the right. Each panel repeats its own
     * branch as li.menu-title-tag so the branch landing page is still
     * reachable from inside it — the arrangement the reference drawer in
     * index.html uses, made recursive so level 3 behaves like level 2.
     */
    function rivett_mobile_nav(array $items)
    {
        $items = rivett_nav_filter($items, 'mobile');
        if (!$items) {
            return;
        }

        echo '<ul>';
        rivett_mobile_nav_items($items, str_repeat(' ', 32));
        echo "\n" . str_repeat(' ', 32) . '</ul>';
    }

    /**
     * The <li>s of one panel, without the <ul> around them — the caller
     * opens that, so a panel can put its heading row in first.
     */
    function rivett_mobile_nav_items(array $items, $indent)
    {
        foreach ($items as $item) {
            $children = rivett_nav_children($item, 'mobile');
            $url      = rivett_nav_e(isset($item['url']) ? $item['url'] : '#');
            $label    = rivett_nav_e($item['label']);
            $target   = rivett_nav_target($item);

            if (!$children) {
                $active = rivett_nav_is_current($item) ? ' class="active"' : '';
                echo "\n{$indent}  <li><a href=\"{$url}\"{$active}{$target}>{$label}</a></li>";
                continue;
            }

            $trail = rivett_nav_in_trail($item, 'mobile') ? ' is-active-trail' : '';

            echo "\n{$indent}  <li class=\"mobile-drop-list{$trail}\">";
            echo "\n{$indent}    <span><a href=\"{$url}\"{$target}>{$label}</a></span>";
            echo "\n{$indent}    <div class=\"sub-menu main-submenu\">";
            echo "\n{$indent}      <ul class=\"main-inner-sub-menu\">";
            echo "\n{$indent}        <li class=\"menu-title-tag\"><a href=\"{$url}\"{$target}>{$label}</a></li>";
            rivett_mobile_nav_items($children, $indent . '      ');
            echo "\n{$indent}      </ul>";
            echo "\n{$indent}    </div>";
            echo "\n{$indent}  </li>";
        }
    }
}

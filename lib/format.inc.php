<?php

define("FIRSTNAME", "Brittany");
define("LASTNAME", "Hackel");
define("TITLE", "Brittany Ann Hackel");
define("EMAIL", "brihackel@gmail.com");
define("PHONE", "2488817620");
define("LINKEDIN", "");

/**
 * Create the HTML for the header block
 * @return string HTML for the header block
 */
function present_header() {
    $title = TITLE;
    $html = <<<HTML
<header>
<h1>$title</h1>
</header>
HTML;
    return $html;
}


?>

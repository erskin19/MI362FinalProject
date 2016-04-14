<?php
/**
 * Create the HTML for the header block
 * @return string HTML for the header block
 */
function present_header() {
    $html = <<<HTML
<header>
<h1><img src="img/super2-600.png" alt="title" height="175" width="600"></h1>
</header>
HTML;

    return $html;
}

?>
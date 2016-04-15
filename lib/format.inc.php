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
<header class="row col-12">
<h1>$title</h1>
</header>
<div class="row" id="tabs">
<a href="index.php"><div class="col-3">About Me</div></a>
<a href="index.php"><div class="col-3">Portfolio</div></a>
<a href="index.php"><div class="col-3">Experience</div></a>
<a href="index.php"><div class="col-3">Contact Me</div></a>
</div>

HTML;
    return $html;
}


?>

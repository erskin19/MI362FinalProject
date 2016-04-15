<?php

define("FIRSTNAME", "Brittany");
define("LASTNAME", "Hackel");
define("TITLE", "Brittany Ann Hackel");
define("EMAIL", "brihackel@gmail.com");
define("PHONE", "2488817620");
define("LINKEDIN", "");

/**
 * Create the HTML for the head block
 * @return string HTML for the head block
 */
function present_head($subTitle) {
    $title = TITLE;
    $html = <<<HTML
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>$title - $subTitle</title>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/main.css">
</head>
HTML;
    return $html;
}

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
<a href="index.php"><div class="col-3 tabs">About Me</div></a>
<a href="portfolio.php"><div class="col-3 tabs">Portfolio</div></a>
<a href="experience.php"><div class="col-3 tabs">Experience</div></a>
<a href="contact.php"><div class="col-3 tabs">Contact Me</div></a>
</div>

HTML;
    return $html;
}


?>

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
<link rel="icon" href="http://example.com/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
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
<header id="header" class="row col-12 col-t-12 col-m-12">
<h1>$title</h1>
</header>
<div class="row" id="tabs">
<a href="index.php#about"><div class="col-3 col-t-3 col-m-12 tabs">About Me</div></a>
<a href="portfolio.php#projects"><div class="col-3 col-t-3 col-m-12 tabs">Portfolio</div></a>
<a href="experience.php#experience"><div class="col-3 col-t-3 col-m-12 tabs">Resume</div></a>
<a href="contact.php"><div class="col-3 col-t-3 col-m-12 tabs">Contact Me</div></a>
</div>

HTML;
    return $html;
}


?>

<?php
/**
 * @file
 * @brief A file loaded for all pages on the site.
 */

require __DIR__ . "/autoload.inc.php";
require __DIR__ . '/format.inc.php';

$site = new Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
    $localize($site);
}

// Start the session system
session_start();


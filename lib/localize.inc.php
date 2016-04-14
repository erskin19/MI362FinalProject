<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */
return function(Site $site) {
    // Set the time zone
    date_default_timezone_set('America/Detroit');
    $site->setEmail('tyler.w.erskine@gmail.com');
    $site->setRoot('/~erskin19/Brit');
    $site->dbConfigure('pgsql:host=ec2-54-225-111-9.compute-1.amazonaws.com;port=5432;dbname=d1tuvors0mh8rt;user=hsqliaypqtrxmt;password=_A21kpoZLp_tqYDC8Zj8vYYKCf',
        'prod_');            // Table prefix
};
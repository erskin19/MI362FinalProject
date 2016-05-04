<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 5/4/2016
 * Time: 10:41 AM
 */
header('Content-Type: application/json');
require 'lib/site.inc.php';
$controller = new Projects($site);

if(empty($_POST['projectId'])){
    exit;
}

$project = $controller->get($_POST['projectId']);
echo json_encode($project);

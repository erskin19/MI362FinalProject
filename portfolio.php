<?php
require 'lib/site.inc.php';
$view = new ProjectView($site);
?>

<!DOCTYPE html>
<html lang="en">

<?php echo present_head("Portfolio"); ?>

<body>
<?php echo present_header(); ?>
<div id="projects" class="row">
    <div class="col-12 col-m-12 col-t-12">
        <h2>My Projects</h2>
    </div>
    <?php echo $view->displayProjects(); ?>
</div>
<div id="popup">
    <a id="exitPopup" href="">X</a>
    <object id="pdf" data="pdf/placeholder.pdf" type="application/pdf" >
        <a id="linkToPdf" href="pdf/placeholder.pdf">Click here for PDF. PDF's are not supported in this browser.</a>
    </object>
</div>
<div id="cover"></div>
</body>

</html>
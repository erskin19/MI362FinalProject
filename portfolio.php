<?php
require 'lib/site.inc.php';
$view = new ProjectView($site);
?>

<!DOCTYPE html>
<html lang="en">

<?php echo present_head("Portfolio"); ?>

<body>
<?php echo present_header(); ?>
<div class="row">
    <div class="col-12 col-m-12 col-t-12">
        <h2>My Projects</h2>
    </div>
</div>
<div id="projects" class="row">
    <div class="col-3 col-t-4 col-m-12"><a class="project" id="1" href="#popup"><img src="img/placeholder.png" alt="placholder" /></a></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <div class="col-3 col-t-4 col-m-12"><img src="img/placeholder.png" alt="placholder" /></div>
    <?php echo $view->displayProjects(); ?>
</div>
<div id="popup">
    <a id="exitPopup" href="">X</a>
    <object id="pdf" data="pdf/Boards.pdf" type="application/pdf" >
        <a href="pdf/Boards.pdf">Project 1</a>
    </object>
</div>
<div id="cover"></div>
</body>

</html>
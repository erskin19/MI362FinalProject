<?php
require 'lib/site.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php echo present_head("Resume"); ?>

<body>
<?php echo present_header(); ?>
<div id="experience" class="row">
    <div class="col-12 col-m-12 col-t-12">
        <h2>My Resume</h2>
    </div>
    <div class="col-12 col-m-12 col-t-12">
        <object id="resume" data="pdf/Resume_BrittanyHackel_Updated5.2.16.pdf" type="application/pdf" >
            <a id="linkToPdf" href="pdf/Resume_BrittanyHackel_Updated5.2.16.pdf">
                <p>Click here for Resume PDF. PDF's are not supported in this browser.</p>
                <i class="fa fa-file-pdf-o fa-5x" aria-hidden="true"></i>
            </a>
        </object>
    </div>
</div>
</body>

</html>
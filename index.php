<?php
//require 'format.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brittany Hackel</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<?php// echo present_header(); ?>
<section>
    <form method="post" action="game-post.php">
        <h2>Please enter name</h2>
        <p class="label">Name:
            <label for="name" ><input type="text" name="name"
                                      id="name"></p>
        <p class="submit"><input type="submit" value="Start Game"></p>
    </form>
</section>

<section>
    <a href="game-post.php?cheat">
        <div class="giveUp">
            <h2>Cheat Mode</h2>
        </div>
    </a>
</section>
</body>

</html>
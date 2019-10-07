<?php 
$title = "For Loop";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>;

    <?php
        //for loops
        for($count = 0; $count <10; $count++){
            echo '<p>HELLO WORLD!</P>';
        }

        for($count = 0; $count <10; $count++){
            echo "<P>The count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php'?>
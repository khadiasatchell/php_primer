<?php 
$title = "while Loop";
include 'includes/header.php'
?>

    <h1><?php echo $title ?></h1>
    <?php
    $grade = 0;
    //Infinite Loop
       // while($grade <10){
          
        //   echo'<p>I AM LESS THAN 10</P>';

        //}
        while($grade <10){
            echo'<p>I AM LESS THAN 10</P>';
            $grade++;
        }

        echo 'Exit Loop';
    ?>

    <h1>Do While Loop</h1>;
        <?php
         //post condition loop
        do{
            echo'<p>I AM DO WHILE LOOP</P>';
            $grade++;
        }while($grade <10);

        echo 'Exit Loop';
    ?>
<?php require 'includes/footer.php'?>
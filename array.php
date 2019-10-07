<?php 
$title = "ArraySS and PrintOUTS";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>;
<?php
//A Variable
    $num = 3;
//an Array
//only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,101,11,1222,13,14,15,16,17777,155);
    //you can access the value ina subscript of the array using the index.

    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);
    echo "<p>Array Numbers is size: $size</p>";

    for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";
    }
    
?>
<?php require 'includes/footer.php'?>









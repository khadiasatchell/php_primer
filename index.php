<?php 
$title = "Index";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>;

<!-- Basic Htmp-->
    <h1> Hello World </h1>
    <br/>
    <?php
        //printing to htmp using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'second line';
        
//declaree variable
    $name = 'Khadia Satchell';
    $age = '26'; 
    //echo Variable
    echo $name;
    echo '<h1>My name is:'.$name.' </h1>';
    echo '<h1>My age is:'.$age.' </h1>';

    echo "<h1>My name is: $name </h1>";

?>
<button type="button" class="btn btn-success">Click Her!</button>
<?php require 'includes/footer.php'?>
<?php 
$title = "String Manipulation";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>;

    <?php
    //Concaatenation od strings
        $phase1 = "Student who came late";
        $phase2 = "in class, that is held online";
        $name = "khadia satchell";
        echo $phase1 ." , named Satchell, ". $phase2;
        echo'<br/>';
        echo'hr/';
    //String transformation 

        echo 'Uppercase first letter: '. ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($name).'<br/>';
        echo 'Upper case: '. Strtoupper($name).'<br/>';
        echo 'Upper case: '. Strtolower("THIS WAS ALL UOOER CASE").'<br/>';
        echo'hr/';
        echo 'Repeat String: ' . str_repeat('a', 10). '<br/>';
        echo 'Repeat Uppercase String: ' . strtoupper(str_repeat('a', 10)). '<br/>';
        echo 'Get a Substring; ' . substr($name, 5, 10). '<br/>';

        echo 'get a position of string: ' . strpos($name, '0'). '<br/>';
        //return Null
        //echo 'get a position of string: ' . strpos($combine, 'z'). '<br/>';
        echo 'Find Character "I": ' . strpos($name, 'I'). '<br/>';
        echo 'Find Character "d": ' . strpos($name, 'd'). '<br/>';
        echo 'Find Character "s": ' . strpos($name, 's'). '<br/>';
        echo 'Find Character "k": ' . strpos($name, 'k'). '<br/>';
        
        echo 'Find Length of String: ' . strlen($name). '<br/>';
        
        echo 'Without Trim: ' . "B C D". "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim("B C D") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim("B C D"). "E" .'<br/>';
        echo 'Trim spaces to the right": '. "A" . rtrim("B C D"). "E" .'<br/>';

        echo ' Replace string with another: ' . str_replace("Stand", "Sit", $combine ) .'<br/>';
    ?>
<?php require 'includes/footer.php'?>
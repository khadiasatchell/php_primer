<?php 
$title = "Function";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>;

    <?php
        //finding a function
        function writemessage(){
            echo "you are awesome </br>";
    }
        //calling a function
        writemessage();
        echo "hr/>";
        writemessage();

        //Function with parameters
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum </br>";
        }
        //pass by reference - use aspersand in parameter
        function changeNum($num){
            $num = $num + 10;
            //$num += 10;
        }
        function returnProduct($nu, $num2){
            $prod = $num1 = $num2;
            return $prod;
        }
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
        echo $num;
        addFunction('10', '50');

        changeNum($num);
        echo $num . '</br>';

        $return_value = returnproduct(10, 200);
        echo $prod . '</br>';
                 
    ?>
<?php require 'includes/footer.php'?>
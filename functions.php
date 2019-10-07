<?php 
    $title = "Functions";
    include 'includes/header.php' ?>
    
<h1> Functions</h1>

<?php
// defining a function

function writeMssage(){
    echo "You are a really nice person, have a nive time. <br/>";

}
// calling a function
writeMssage();

echo "<hr/>";

writeMssage();

// function with parameter
function addFunction($num1, $num2){

    $sum = $num1 + $num2;
    $num2 = $num2 + 1;
    echo "The Sum of $num1 and $num2 is: $sum <br/>";
}

function changeNum(&$num){
   $num = $num + 10;
    // $num += 10;
}

function returnProduct( $num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
}

$num =  500;
addFunction(10, 20);
addFunction(10, $num);
addFunction('10', "50");

changeNum($num);
echo$num . '<br/>';

$return_value = returnProduct(10, 200);
echo $return_value . '<br/>';


?>

<?php     require 'includes/footer.php' ?>
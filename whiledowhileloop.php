<?php 
    $title = "While Do While Loop";
    include 'includes/header.php' 
?>
<h1>While Loop</h1>

<?php

$grade = 0;
// infinite loop
//while ($grade < 10){
    // echo '<p> I am Less than 10!</p>';
//}
// Pre-Condition

while ($grade < 10){
    echo '<p> I am Less than 10!</p>';
    $grade++;
    
}
echo 'Exit Loop!'

?>
<h1>Do- While Loop</h1>
<?php
// Post Condition
$grade = 0;
do{

    echo '<p> I AM DO WHILE LOOP</p>';
    $grade++;
}while($grade < 10);

echo 'Exit Loop!'

?>

    
<?php     require 'includes/footer.php' ?>
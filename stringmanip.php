<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
     ?>

    <?php

    $phrase1 = "Student who came late ";
    $phrase2 = " in clas, stand with rocks ";
    $name = "denton smith";
    
    echo $phrase1 . ", name Tifanny,  " . $phrase2;

    echo '<br/>';

    // String transformation
    echo 'Uppercase fist letter: ' . ucfirst($name). '<br/>';

    echo 'Uppercase fist letter of each word: ' . ucwords($name). '<br/>';
    echo 'Upper case: ' . strtoupper($name). '<br/>';
    echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
    echo '<hr/>';

    echo ' Repear String: ' . str_repeat('a', 10). '<br/>';
    echo ' Repear String: ' . strtoupper(str_repeat('a', 10)). '<br/>';

    echo 'Get a Subtring: ' . substr( $name, 3,10). '<br/>';
    echo 'Get position of string: ' . strpos( $name, 's'). '<br/>';
    //Return null
    //Get position of the string ' strpos($combine, 'z'). '<br/>';
    echo 'Find Character "E:' . strchr($name, 'E'). '<br/>';
    echo 'Find Character "t:' . strchr($name, 't'). '<br/>';
    echo 'Find Character "s:' . strchr($name, 's'). '<br/>';
    echo 'Find Character "i:' . strchr($name, 'i'). '<br/>';

    echo 'Find Lenght of String: ' . strlen($name) . '<br/>';

    echo 'Without Trim: ' . " A" .  "B C D" . "E". '<br/>';
    echo 'Trim spaces on both sides: ' . " A" . trim("B C D") . "E". '<br/>';
    echo 'Trim spaces on the left: ' . " A" . ltrim("B C D") . "E". '<br/>';
    echo 'Trim spaces on the right: ' . " A" . rtrim("B C D") . "E". '<br/>';

    echo 'Replace streing with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';

    ?>


<?php     require 'includes/footer.php' ?>
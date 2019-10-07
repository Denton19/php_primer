<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' ?>

    <h1> <?php echo $title ?> </h1>
    <?php
    //A variable
    $num = 3;
    // an array
    // only one datatype
    $numbers = array (1,2,3,4,5,6,7,8,9,10,2,55,66,77,90,102,44,15,88,33,500);

    echo $numbers[5];
    // You can access the value in a subcripet of the array using the index
    echo "<p>$numbers[9] </p>";

    $size = count ($numbers);
    echo "<p> Array Number is Size: $size </p>";

    for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";
    }

    ?>

<?php     require 'includes/footer.php' ?>
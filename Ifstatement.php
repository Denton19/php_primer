<?php
        $title = "If Statement";
        include 'includes/header.php' ?>

    <h3 style="color: green"></h3>
    <?php 

        // all if statement that will carry out an action base on the value of the variable

        echo '<h2>If Statement </h2>';

        $grade = 80;

        // ==,>,<,<==,>==
        if($grade >= 50){
            echo '<h3 style="color: green">You Have Passed</h3>';
        }
        else{
            echo '<h3 style="color: red" You Have Failed</h3>';
        }

        $grade = 'B';
        //if-else
        if($grade == 'A'){
            echo '<h2 style="color: green" >YOU ARE A SUPER STAR!</h2';
        }
        elseif ($grade == 'B'){
                        
            echo '<h2 style="color: blue" >YOU DID WELL!</h2';
        }else {
                        
            echo '<h2 style="color: red" >YOU HAVE FAILED!</h2';
        }

    ?>



<?php     require 'includes/footer.php' ?>
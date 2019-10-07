<?php 
    $title = "Index";
    include 'includes/header.php' 
?>

     <!-- basic html -->
     <h1>Hello HTML - PHP Primer</h1>
     <br/>

     <?php 
     /* printing to html using echo*/
     echo "Hello PHP";
     echo '<br/>';
     echo "second line";
     echo '<br/>';
     
     

    
     //declared variable
        $name = 'Denton Smith <br/>';
        $age = 30;
        //echo variable
        echo $name;
       // echo $age;
        echo '<h1> My name is: '.$name.' </h1>';
        echo '<h1> My age is: ' . $age.' </h1>';
        // echo using double quotes and implementation
        echo "<h1> My name is: $name </h1>";
    ?>
    
    <button type="button" class="btn btn-success"> CLICK ME! </button>

    <?php
   require 'includes/footer.php' 
?>
<?php
/*
Template Name: Law Landing Page
*/
?>


<?php

/*$actual_link = "$_SERVER[REQUEST_URI]";

preg_match_all('!\d+!', $actual_link, $matches);
*/

?>

<?php
include(__DIR__.'/../law-lp/parts/Top-crim.php');
?>

    <div class="row r3">

        <div class="columns small-12 large-7 r3-c1 desk-show">

            
            <?php
include(__DIR__.'/../law-lp/parts/what-you-need-crim.php');
?>

        </div>

        <div class="columns small-12 large-5 r3-c2 show-for-medium">

            <?php
            include(__DIR__.'/../law-lp/parts/testimonials.php');
            ?>

        </div>


    </div>

   

<?php
include(__DIR__.'/../law-lp/parts/Bottom-crim.php');
?>
  


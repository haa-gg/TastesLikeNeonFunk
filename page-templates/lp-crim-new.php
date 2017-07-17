<?php
/*
Template Name: Law Landing Page
*/
?>


<?php

/*$actual_link = "$_SERVER[REQUEST_URI]";

preg_match_all('!\d+!', $actual_link, $matches);

include(dirname(__DIR__).'/law-page/parts/top.php');
*/

?>

<?php
include(dirname(__DIR__).'/law-page/parts/Top-crim.php');
?>

    <div class="row r3">

        <div class="columns small-12 large-7 r3-c1 desk-show">

            
            <?php
include(dirname(__DIR__).'/law-page/parts/what-you-need-crim.php');
?>

        </div>

        <div class="columns small-12 large-5 r3-c2 show-for-medium">

            <?php
           include(dirname(__DIR__).'/law-page/parts/testimonials.php');
            ?>

        </div>


    </div>

   

<?php
include(dirname(__DIR__).'/law-page/parts/Bottom-crim.php');
?>
  


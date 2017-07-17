
<?php  

//Setting phone as a var
$phone = "<a href=\"tel:1\">111-111-1111</a>"; 

$phonelink = "1";?>

<?php 
//Assign the $geo variable to whatever the ?geo= query is equal to
$geo = $_GET['geo'];

//Put all cities in a single array
$geo_arr = array ("minneapolis", "moscow", "camelot", "chicago", "los-angeles");

//Put the geos with small address sets in this array
$small_arr = array ();

//Put any small address geos with 2 addresses in here
$stack_arr = array ();

//This bad boy makes sure the geo query is a legit one and not some sketchy bit of SQL
if (in_array($geo, $geo_arr)){

    $geo_pos = array_search($geo, $geo_arr);

    $geo_active = $geo_arr[$geo_pos];

            //Detect if the geo has numbers in it and if it does, then go do some special formatting to it
    if (strcspn($geo_active, '0123456789') != strlen($geo_active)) {

        switch ($geo_active) {

//Throw the special snowlfake formatting cases in here
            case "twin-123":
            $geo_txt = "Twin Cities";
            break;

            case "twin-456":
            $geo_txt = "Twin Cities";
            break;

            case "twin-789":
            $geo_txt = "Twin Cities";
            break;
        }

    } 

    else{

//If the geo case is not a special snowflake, then just swap the dashes for spaces and capitalize verything properly
        $geo_txt = str_replace("-", " ",$geo_active);

        $geo_txt = ucwords($geo_txt);

    }
    
}

else{
//Putting in a default geo value in case somebody puts in a geo query we don't like or flubs the spelling
        $geo = "minnesota";

        $geo_txt = "Minnesota";
        
    }

//Checks if the active geo is supposed to be small address format
$format_var="big-addr";

if(in_array($geo_active,$small_arr)){

    $format_var="sm-addr";

}

//Extra formatting junk for small addresses w/ more than 1 address
$stack_var = "";
$stack_fmt = "";
if(in_array($geo_active,$stack_arr)){

    $stack_var="-stack";
    $stack_fmt="stack";

}

?>

<?php

//Uses gets device type in case we want something to render differently
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");

if ($iphone || $android || $palmpre || $ipod || $ipad || $berry == true) { 
           $device='mobile';
    } else {
         $device='desk';
    }

?>

<?php

//gets the &camp query and populates the headline with it
$haa_query_2 = $_GET['camp'];

switch ($haa_query_2) {

    case "1":
    $camp = 'Need Expert Legal Assistance?';
    break;

    case "2":
    $camp = 'Out To Fight A Ticket?';
    break;

    default:
    $camp = 'Are You In Trouble With The Law?';

}
?>

<?php 

    //Extra classes for the LP fed in as body classes
$extra_classes=array($device,'generic-law', $format_var, $stack_fmt); 
?>

<!doctype html>



 <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--  <base href="http://nrsinjurylaw.com/helpline/" /> -->


    <!-- Begin SEO Link -->
    <?php
    $seo_uri=strtok($_SERVER["REQUEST_URI"],'?');
    $seo_url=$_SERVER['HTTP_HOST'];
    $base="http://".$seo_url."/helpline/";
    ?>
    <link rel="canonical" href="<?php echo $seo_url.$seo_uri.'?useHAAG=1'; ?>" />
    <!-- End SEO Link -->

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/law-page/assets/scss/style-haa-crim.css">
    

    

</head>

<body <?php body_class($extra_classes); ?>>

<?php echo $_GET['test']; ?>

 <!-- GOOGLE Tag Manager -->

 <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-');</script>

<!-- End GOOGLE Tag Manager -->

<div class="r1-bg-wrap">

    <div class="row r1 align-middle"> 

        <div class="columns small-12 medium-12 large-4 r1-c1">

            <div class="desk-show">

                <img src="<?php echo get_stylesheet_directory_uri();?>/law-page/assets/images/logo.jpg" class="r1-logo desk-show"
                alt="Example Law Firm"/>

            </div>

            <div class="mobile-show">

                <div class="row align-middle">

                    <div class="columns small-12 medium-12 large-12">

                        <img src="<?php echo get_stylesheet_directory_uri();?>/law-page/assets/images/logo.jpg" class="r1-logo"
                        alt="Example Law Firm"/>

                    </div>

                </div>

                <h2>

                    Call Us Now!

                </h2>

                <h3>

                    <?php echo $phone ?>
                    
                </h3>

            </div>

        </div>

    

        <?php // include (__DIR__.'/r1-mid-'.$ver.'.php');?>

        <div class="columns small-12  large-8 r1-c3">

            <div class="desk-show">

                <h2>

                Call Us Now <?php echo $phone ?><br>
                <span>PROUDLY SERVING <?php echo $geo;?></span>

               </h2>

           </div>

       </div>

<!-- <h4 class="mobile-show">
    I'm some bit of content!
</h4> -->


</div>

</div>

</div>

<div class="grey-bg desk-show">

    <div class="row r2" >

     <div class="columns small-12 large-9 r2-c1 align-middle">

        <h1 class="haaHD">

            <?php echo $camp ?>

        </h1>

         <div class="small-hero">
             
Let Our Years Of Combined Experience Help You!<sup>*</sup>

         </div>


         <div class="hero-text">

             One Of The Biggest Law Firms

         </div>

        <!--  <h4>Put our 100+ years of combined legal experience to work for you!</h4> -->

    </div>


    <div class="columns small-12 large-3 r2-c2" >

       <?php echo do_shortcode('[contact-form-7 id="69" title="Law CF"]'); ?>

   </div>

</div>

</div>

<div class="grey-grad">

    <div class="row r2 mobile-show">

        <div class="column small-12 r2-c1">

        <h1>
                <?php echo $camp ?><sup>*</sup>

            </h1>

          <div class="small-hero">
             
Get Help Now, Pay Later!<sup>*</sup>

         </div>

           

             <div class="hero-text">

             One Of The Biggest Law Firms

         </div>

            <!-- <h4>Put our 100+ years of combined legal experience to work for you!</h4>
        -->
    </div>

</div>
</div>



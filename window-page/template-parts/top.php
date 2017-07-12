<!doctype html>
<html>
<head>

    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
    <!-- Icons & Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png"
    rel="apple-touch-icon"/>
        <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php } ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage"
        content="<?php echo get_template_directory_uri(); ?>/window-page/assets/images/win8-tile-icon.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/window-page/assets/stylesheets/foundation.css"> 
        <link href="https://fonts.googleapis.com/css?family=Abel|Anton" rel="stylesheet">
        <meta name="theme-color" content="#121212">

        <?php  $phone = "<a href=\"tel:1\">123.456.7890</a>"; 
        $phonelink = "1";?>

        <?php

        $geo_arr = array(
            "minneapolis",
            "hogwarts",
            "seattle"
            );

        $haa_query_4 = $_GET['geo'];

        if (in_array($haa_query_4, $geo_arr)){

            $geo_pos = array_search($haa_query_4, $geo_arr);

            $geo_txt = str_replace("-", " ",$geo_arr[$geo_pos]);

            $geo_txt = ucwords($geo_txt);

        }

        else{
            $geo_txt = "Lakeville";
        }?>

        <?php

        $haa_query_2 = $_GET['camp'];

        switch ($haa_query_2) {

            case "window-replacement":
            $camp = "Window Replacement";
            break;

            case "window-repair":
            $camp = "Window Repair";
            break;

            default:
            $camp = "QUALITY WORK, PLAIN AND SIMPLE";

        }

        ?>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!--    Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-');</script>
    <!-- End Google Tag Manager -->

</head>


<body <?php body_class(); ?>>

<div class="flow-wrap">

  <!-- HAA Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56RGGQK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- HAA Google Tag Manager (noscript) -->


    <div class="span-darkgray">

        <div class="row header align-middle">

            <div class="columns small-5 medium-5 large-3 logo-wrap">

               <a href="http://tintgraphic.com/" id="main-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/window-page/assets/images/logo.png" class="r1-logo" alt="G&P Windows"/></a>

            </div>

            <div class="columns small-7 medium-7 large-3 3m-wrap">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/window-page/assets/images/3Mlogo-White.png" class="three-m" alt="3M Authorized Window Film Dealer: Prestige Dealer Network"/>

            </div>

            <div class="columns small-5 medium-5 large-3 show-for-large bbb-wrap">

                

            </div>

            <div class="columns small-5 medium-5 large-3 show-for-large call-us">

                <h2>CALL ANY TIME<br>
                   <?php echo $phone; ?></h2>

                </div>

            </div>

        </div>

        <div class="row mobile-call align-middle hide-for-large">

                        <div class="column small-12 call-area">

                            <h2><?php echo $phone; ?></h2>

                        </div>

                    </div>

        <div class="span-lightgray">

            <div class="row headline">

                <div class="column small-12">

                    <h1><?php echo $camp; ?></h1>

                </div>

            </div>

        </div>


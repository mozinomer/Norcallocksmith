<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INdex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- addding the cdn's -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body>
<header>
    <div class="headertopCOntainer">
        <div class="container">
            <div class="imagelogo"><img src="<?php echo get_template_directory_uri(); ?>/images/8.png"></div>
            <div class="timingandcontact">
                <span class="timingHeader">
                    MON to FRI : 08:00 AM - 08:00 PM  
                </span>
                <a href="#" class="bluebutton">Contact us</a>
            </div>
            <div class="menucontainerMain" id="scrolledmenu">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">resources</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="menucontainerMain">
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">resources</a></li>
            <li><a href="#">contact us</a></li>
        </ul>
    </div>
</header>

<?php if( is_front_page()) { ?>
    <div class="bannerCOntainer">
        <div class="sliderContainer">
            <div class="slidebanner" style="background: url('<?php echo get_template_directory_uri(); ?>/images/3.png');">
                <div class="container">
                    <div class="contentslider">
                        <h6>We’re There For Your Care</h6>
                        <h2>Get All The Locks Done</h2>
                        <p>NorCal Locksmith is the premier locksmithing service in the greater Sacramento California area</p>
                        <div class="containerbutton">
                            <a href="#" class="bluebutton">LEARN MORE</a>
                            <a href="#" class="whitebutton">OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slidebanner" style="background: url('<?php echo get_template_directory_uri(); ?>/images/3.png');">
                <div class="container">
                    <div class="contentslider">
                        <h6>We’re There For Your Care</h6>
                        <h2>Get All The Locks Done</h2>
                        <p>NorCal Locksmith is the premier locksmithing service in the greater Sacramento California area</p>
                        <div class="containerbutton">
                            <a href="#" class="bluebutton">LEARN MORE</a>
                            <a href="#" class="whitebutton">OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="bannerOther" style="background-image: url('<?php the_field('imageBanner'); ?>')">
        <div class="container">
            <div class="contentOtherbanner">
                <h2>
                    <?php the_field('headingBanner'); ?>
                </h2>
                <p>
                    <?php the_field('contentBanner'); ?>
                </p>
            </div>
        </div>
    </div>
<?php } ?>

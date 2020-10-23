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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<header>
    <div class="headertopCOntainer">
        <div class="container">
            <div class="imagelogo">
                <a href="<?php echo site_url(); ?>">
                     <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                     ?>
                 </a>
            </div>
            <div class="timingandcontact">
                <span class="timingHeader">
                   <?php the_field('company_timing_', 'option'); ?>
                </span>
                <a href="#" class="bluebutton">Contact us</a>
            </div>
            <div class="menucontainerMain" id="scrolledmenu">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'container_class' => 'custom-menu-class' ) ); 
                ?>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="menucontainerMain">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'header-menu', 
                'container_class' => 'custom-menu-class' ) ); 
        ?>
    </div>
</header>

<?php if( is_front_page() )  { ?>
    <div class="bannerCOntainer">
        <div class="sliderContainer">
             <?php //if( have_rows('list_itemsServices') ): while( have_rows('list_itemsServices') ) : the_row(); ?>
                <div class="slidebanner" style="background: url('<?php the_field('banner_background_image', 5); ?>');">
                    <div class="container">
                        <div class="contentslider">
                            <h6><?php the_field('banner_sub_heading', 5); ?></h6>
                            <h2><?php the_field('main_heading', 5); ?></h2>
                            <p><?php the_field('contentH', 5); ?></p>
                            <div class="containerbutton">
                                <a href="<?php the_field('button_1_link', 5); ?>" class="bluebutton"><?php the_field('button_1_text', 5); ?></a>
                                <a href="<?php the_field('button_2_link', 5); ?>" class="whitebutton"><?php the_field('button_2_text', 5); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php //endwhile; else : endif; ?> 
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

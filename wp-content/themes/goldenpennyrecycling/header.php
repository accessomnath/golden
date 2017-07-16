<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Jan-17
 * Time: 1:15 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>:- goldenpennyrecycling -:</title>
    <!--Required styles-->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootsnav.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="css/normalize.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/set2.css"/>
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
    <link href="<?php bloginfo('template_url'); ?>/line-icons/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700,700i,900|Playfair+Display:400,400i,700,900"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:300,400,600,700"
          rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<!-- Header Start-->
<div class="full-area">
    <section id="nav-area">
        <div class="nav-back-area">
            <div class="container">
                <div class="navbar navbar-default navbar-brand-top bootsnav on no-full">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse dextop-view">

                        <?php
                        global $wpdb;
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'menu_class' => 'nav navbar-nav'
                        ));
                        ?>


                        <!--                        <ul class="nav navbar-nav">-->
                        <!--                            <li class="active"><a href="#">Home</a></li>-->
                        <!--                            <li><a href="#">Bottle exchange</a></li>-->
                        <!--                            <li><a href="#">Scrap metals</a></li>-->
                        <!--                            <li><a href="#">Location</a></li>-->
                        <!--                            <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle"-->
                        <!--                                                     role="button">Charities-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="#">Contact us</a></li>-->
                        <!--                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="section-02">
        <div class="sliding-area">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-5">
                        <div class="logo-area">
                            <?php if (get_theme_mod('themeslug_logo')) : ?>
                                <a href='<?php echo esc_url(home_url('/')); ?>' class=""
                                   title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img
                                        src='<?php echo esc_url(get_theme_mod('themeslug_logo')); ?>'
                                        class="img-responsive"
                                        alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
                            <?php else : ?>
                                <hgroup>
                                    <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>'
                                                              title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'
                                                              rel='home'><?php bloginfo('name'); ?></a></h1>
                                    <h2 class='site-description'><?php bloginfo('description'); ?></h2>
                                </hgroup>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="heading-content">
                            <h1><span>Golden Penny </span> Enterprise</h1>
                            <p>“ Recycling is our Passion” </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

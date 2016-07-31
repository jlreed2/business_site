<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Links to our Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark:500,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
    
        <header class="row">
            <div class="three columns">
                <a id="logo" href="http://www.jenniferlreed.com/WIE-Slicks/"></a>
                <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url; ?>">
                    <?php bloginfo('name'); ?></a></h1>
            </div>
            <div class="seven columns blank-menu-header">
                <?php
                    wp_nav_menu( array(
                        'sort_column' => 'menu_order',
                        'container_class' => 'blank-menu-header'
                    ));
                ?>
            </div>
            <div class="two columns">
                <h4 id="qs">Questions?</h4>
                <p id="tele">(352)555-1234</p>
            </div>
        </header>

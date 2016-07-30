<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Links to our Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Palanquin+Dark:500,400,600' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <div class="container">
    
        <header class="row">
            <div class="twelve columns">
                <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                    <?php bloginfo('name'); ?></a></h1>
                    <?php
                        wp_nav_menu( array(
                            'sort_column' => 'menu_order',
                            'container_class' => 'blank-menu-header'
                        ));
                    ?>
                <h3>Questions?</h3>
            </div>
        </header>

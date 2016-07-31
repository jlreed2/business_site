<?php
/*
Template Name: About Page
*/

get_header(); ?>
<!-- BEGIN SECTION PHP -->
    <section class="row">
         <div class="three columns">
            <?php dynamic_sidebar('about-widget'); ?>
        </div>
        <div class="nine columns">
            <!-- BEGIN LOOP -->
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        /*OUR DATA CONTEXT IS DEFINED */
                        the_post(); ?>
            
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php
                    }//end while
                } //end if
            ?>
            <!-- END LOOP -->
        </div>
    </section>
<!-- END SECTION PHP -->

<?php get_footer(); ?>
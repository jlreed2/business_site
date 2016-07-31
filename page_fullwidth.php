<?php
/*
Template Name: Full Width 
*/
?>

<?php get_header(); ?>
<!-- BEGIN SECTION PHP -->
    <section class="row">
        <div class="twelve columns">
            <!-- BEGIN LOOP -->
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        /*OUR DATA CONTEXT IS DEFINED */
                        the_post(); ?>
            
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                    }//end while
                } //end if
            ?>
            <!-- END LOOP -->
        </div>
    </section>
<!-- END SECTION PHP -->

<?php get_footer(); ?>
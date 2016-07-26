<?php
/*
Template Name: Blog Posts
*/
<?php get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

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
                        <?php the_content(); ?>
                    <?php
                    }//end while
                ?>
                    
                <!-- Navigation -->
                <div class="navigation">
                <span class="newer">
                    <?php previous_posts_link(__('« Newer','example')) ?>
                </span> 
                <span class="older">
                    <?php next_posts_link(__('Older »','example')) ?>
                </span>
            </div>
            <?php
                } //end if
            wp_reset_query();
            ?>
            <!-- END LOOP -->
        </div>
    </section>
<!-- END SECTION PHP -->

<?php get_footer(); ?>
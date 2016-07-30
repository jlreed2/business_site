<?php
/*
Template Name: Blog Posts
*/

get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<!-- BEGIN SECTION PHP -->
    <section class="row">
        <div class="nine columns">
            <!-- BEGIN LOOP -->
            <?php 
                if (have_posts()) {
                    while(have_posts()) {
                        /*OUR DATA CONTEXT IS DEFINED */
                        the_post(); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(__('Continue reading »','example')); ?>
                        <?php
                    }//end while
                ?>
                <div class="navigation">
                    <span class="newSer">
                        <?php previous_posts_link(__('« Newer','example')) ?>
                    </span> 
                    <span class="older">
                        <?php next_posts_link(__('Older »','example')) ?>
                    </span>
                </div>
            <?php
                } //end if
            wp_reset_query(); ?>
            <!-- END LOOP -->
        </div>
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
    </section>
<!-- END SECTION PHP -->

<?php get_footer(); ?>
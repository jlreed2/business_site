<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns primary">
<!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) {
                while(have_posts()) {
                   /*OUR DATA CONTEXT IS DEFINED */
                    the_post(); ?> 
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php } ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                } 
            ?>

<!-- END PAGE PHP -->
        </div>
    </section>

<?php get_footer(); ?>
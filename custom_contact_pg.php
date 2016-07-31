<?php
/*
Template Name: Contact Page
*/

get_header(); ?>
<!-- BEGIN SECTION PHP -->
    <section class="body row">
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
                } //end if
            ?>
            <!-- END LOOP -->
            <form method="post" action="contact-form.php" class="contact_form">
                    <label for="Name">Name:</label>
                    <input type="text" name="Name" id="Name" />
                    
                    <label for="Email">Email:</label>
                    <input type="text" name="Email" id="Email" />
                    
                    <label for="Message">Message:</label>
                    <textarea type="text" name="Message" rows="20" cols="60" id="Message"></textarea>
                    <br />
                    <input type="submit" name="submit" value="Submit" class="submit-button" />
                </form> 
        </div>
    </section>
<!-- END SECTION PHP -->

<?php get_footer(); ?>

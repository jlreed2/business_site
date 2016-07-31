<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="twelve columns">
        <div class="row my-slider">
            <ul>
        <?php
            $args   = array( 'post_type' => 'Slider' );
            $slides = new WP_Query( $args );

            if( $slides->have_posts() ) {
              while( $slides->have_posts() ) {
                $slides->the_post();

                /*--- Build Thumbnail URL ---*/
                $thumb_id        = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url       = $thumb_url_array[0];
                ?>
                    <li style="background-image: url('<?php echo $thumb_url ?>');" class="slide-container">
                        <div class="slides-message">
                            <h1><?php the_title() ?></h1>
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </li>
                <?php
              }
            }
            else {
              echo 'No Slides';
            }
        ?>
            </ul>
        </div>
        <div class="row secondary">
            <div class="twelve columns">
                <div class="four columns">
                    <a id="test" href="http://www.jenniferlreed.com/WIE-Slicks/about/testimonials/"></a>
                    <h5>Testimonials</h5>
                </div>
                <div class="four columns">
                    <a id="service" href="http://www.jenniferlreed.com/WIE-Slicks/pricing/"></a>
                    <h5>Services</h5>
                </div>
                <div class="four columns">
                    <a id="quote" href="http://www.jenniferlreed.com/WIE-Slicks/contact-us/"></a>
                    <h5>Need A Quote?</h5>
                </div>
            </div>
            <div class="twelve columns">
                <div class="four columns">
                    <a id="blog" href="http://www.jenniferlreed.com/WIE-Slicks/blog/"></a>
                    <h5>Blog</h5>
                </div>
                <div class="four columns">
                    <a id="location" href="http://www.jenniferlreed.com/WIE-Slicks/contact-us/location/"></a>
                    <h5>Location</h5>
                </div>
                <div class="four columns">
                    <a id="about" href="http://www.jenniferlreed.com/WIE-Slicks/about/"></a>
                    <h5>About Slick's</h5>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>

    <footer class="row">
        <div class="four columns">
            <?php dynamic_sidebar('footer-one'); ?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('footer-two'); ?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('footer-three'); ?>
        </div>
    </footer>

    </div> <!--End Container Div-->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(function() { $('.my-slider').unslider({
            autoplay: true 
            });
        });
    </script>
    <?php wp_footer(); ?>
 </body>
</html>
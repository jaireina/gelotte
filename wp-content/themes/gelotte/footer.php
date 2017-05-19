<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

                </div><!-- End content -->

                <footer class="footer">
                    <div class="container">
                        <div id="footer-row" class="row site-footer">

                            <div class="site-description">
                                <h1><?php bloginfo('description'); ?></h1>
                            </div>

                            <div class="socials">
                                <?php get_social_icons(); ?>
                            </div>

                        </div>
                    </div>
                </footer>

            <!-- Wordpress Footer-->
            <?php wp_footer(); ?>

            <!--call jPushMenu, required-->
            <script>
                jQuery(document).ready(function($) {
                    $('.toggle-menu').jPushMenu();
                });
            </script>

            <script>
                jQuery(document).ready(function($) {
                    $('.the-slider').unslider();
                });
            </script>



        </div><!-- End id="wrapper" -->

    </body>
</html>
<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

                <footer class="footer">
                    <div class="container"></div>
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

            </div><!-- end container -->

            <!--wordpress footer-->
            <?php wp_footer(); ?>

<!--call jPushMenu, required-->
            <script>
                jQuery(document).ready(function($) {
                    $('.toggle-menu').jPushMenu();
                });
            </script>

        </div>
    </body>
</html>
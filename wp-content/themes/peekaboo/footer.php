<?php
/*
 * The template for displaying the footer.
 */
global $smof_data;
?>
</div>
<!--Main end-->

</div>
<div class="container footer-container">
    <!-- Footer begin -->
    <div id="footer" class="row round_8 clearfix" role="contentinfo">

        <div class="columns large-12 small-12">
  
            </div>

            <!-- <div > -->
            <!-- Footer-bottom begin -->
            <div id="footer-bottom" class="row" role="contentinfo">

                <?php if ( $smof_data['pkb_totop'] == '1') { ?>
                <div class="large-3 small-6 columns">
                    <div id="toTop">
                        <?php _e('Tillbaka', 'peekaboo'); ?>
                    </div>
                </div>
                <div class="large-6 large-offset-3 small-6 columns">
                    <?php } else { ?>
                    <div class="large-6 large-offset-6 columns">
                        <?php } ?>
                        <div id="footer-note">
                            <!-- Footer Note begin -->
                            <small>
                                <?php if ($smof_data['pkb_credit'] != "") : echo $smof_data['pkb_credit']; else: ?>
                                    &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a> | <a href="http://themeforest.net/user/population2/portfolio?ref=population2" target="_blank">Peekaboo Theme</a> by <a href="http://themeforest.net/user/population2/profile?ref=population2" target="_blank">Population 2</a>
                                <?php endif; ?>
                            </small>
                        </div>
                    </div>

                    <!-- Footer Note end -->

                </div>
                <!-- Footer-bottom end -->
                <!-- </div> -->

            </div>


        </div>
        <!-- Footer end -->

    </div>
    <!-- Container end -->

</div>
<!-- Content Wrapper end -->

<?php wp_footer(); ?>
<script>
    jQuery(function ($) {
        $(document).foundation();
    });
</script>

</body>
</html>
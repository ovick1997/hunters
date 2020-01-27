    <footer class="footer_area">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                       <?php if (is_active_sidebar('footer1')): ?> 
                            <div class="footer_widget_content para_default">
                                <?php dynamic_sidebar('footer1'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <?php if (is_active_sidebar('footer2')): ?>
                            <div class="footer_widget_content para_default">
                                <?php dynamic_sidebar('footer2'); ?>
                            </div>
                        <?php endif ?>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <?php if (is_active_sidebar('footer3')): ?>
                            <div class="footer_widget_content para_default">
                                <?php dynamic_sidebar('footer3'); ?>
                            </div>
                       <?php endif ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <?php if (is_active_sidebar('footer4')): ?>
                            <div class="footer_widget_content para_default">
                                <?php dynamic_sidebar('footer4'); ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <p><?php bloginfo('name'); ?>  - &copy; <?php echo date('Y'); ?></p>
            </div>
        </div>

    </footer>

    <?php wp_footer(); ?>
</body>
</html>
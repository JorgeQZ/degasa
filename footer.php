<footer>
    <div class="column">
        <?php  if ( is_active_sidebar( 'fcolumn-1' ) ) : ?>
        <div id="fcolumn-1" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-1' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="column">
        <?php  if ( is_active_sidebar( 'fcolumn-2' ) ) : ?>
        <div id="fcolumn-2" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-2' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="column">
        <?php  if ( is_active_sidebar( 'fcolumn-3' ) ) : ?>
        <div id="fcolumn-3" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-3' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="column">
        <?php  if ( is_active_sidebar( 'fcolumn-4' ) ) : ?>
        <div id="fcolumn-4" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-4' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="column">
        <?php  if ( is_active_sidebar( 'fcolumn-5' ) ) : ?>
        <div id="fcolumn-5" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-5' ); ?>
        </div>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

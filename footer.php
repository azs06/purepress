<div class="footer">
    <div class="pure-menu pure-menu-horizontal pure-menu-open">
       
        <?php 
$args = array(
'theme_location' => 'footer-menu',
'item_wrap'      => '%3$s',
'container'       => '',
'menu_class'      => '',
);
wp_nav_menu( $args );

?>
    </div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>

<div class="sidebar pure-u-1 pure-u-med-1-4">

<div class="header">
<hgroup>
<h1 class="brand-title"><?php bloginfo('name' ); ?></h1>
<h2 class="brand-tagline"><?php bloginfo('description' ); ?></h2>
</hgroup>

<nav class="nav">
<?php 
$args = array(
'theme_location' => 'main-menu',
'item_wrap'      => '%3$s',
'container'       => '',
'menu_class'      => 'nav-list',
);
wp_nav_menu( $args );

?>
</nav>
</div>
</div>

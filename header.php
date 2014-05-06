<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title><?php wp_title( '-', true, 'right' ); ?>
<?php bloginfo('name'); ?>
    </title>

<?php wp_head(); ?>
</head>
<body>

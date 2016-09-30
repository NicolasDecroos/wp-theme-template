<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <title>
        <?php
        wp_title('');
        if (wp_title('', false)) {
            echo ' :';
        }
        bloginfo('name');
        ?>
    </title>

    <!-- ICONS -->
    <link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>


    <!-- FONTS -->

    <!-- SCRIPTS -->

    <!-- META -->    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- WORDPRESS -->
    <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

<!-- HEADER -->
<header>

    <!-- NAVIGATION -->
    <nav class="nav" role="navigation">
        <?php wp_nav_menu(array('menu' => 'Main')); ?>
    </nav>
    <div class="clearfix">&nbsp;</div>
</header>


<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php
    // Prevent CSS Caching
    $css_link = get_bloginfo('template_url') . '/build/css/master.css';
    $css_file = get_template_directory() . '/build/css/master.css';
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo $css_link . '?' . filemtime($css_file); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Pacifico|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gravitas+One" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
    <header class="page-header">

        <?php if ( is_front_page()) { ?>
        <h1>
            <a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo('name'); ?></a>
        </h1>
        <?php } else { ?>
        <h2>
            <a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo('name'); ?></a>
        </h2>
        <?php } ?>
        <div class="description"><?php echo get_bloginfo('description'); ?></div>
    </header>


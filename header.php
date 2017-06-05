<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php
    // Prevent CSS Caching
    $css_link = get_bloginfo('template_url') . '/build/css/master.css';
    $css_file = get_template_directory() . '/build/css/master.css';
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo $css_link . '?' . filemtime($css_file); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Lato|Open+Sans+Condensed:300|Roboto" rel="stylesheet">

    <script src="https://use.fontawesome.com/ad68b1285a.js"></script>

    <?php wp_head(); ?>
</head>
<body>
  <!-- wrapper -->
<div class="container">

  <!-- header -->
  <header class="header clear" role="banner">

      <!-- nav -->
      <nav class="nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
      <!-- /nav -->

      <!-- logo -->
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">-->
            Kodkarin
        </a>
      </div>
      <!-- /logo -->

  </header>
  <!-- /header -->

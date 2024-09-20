<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejr og Davidsens Hundepension og internat</title>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="flex">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri('assets/img/LOGO.svg'); ?>" alt="Sejr og Davidsens logo"></a>
        <div class="navPoints">
            <a <?php if (is_page('dyrepension')) echo 'class="activePage"' ?> href="<?php echo esc_url(site_url('/dyrepension')) ?>">Dyrepension</i></a>
            <a <?php if (is_page('adoption') or get_post_type() == 'dog') echo 'class="activePage"' ?> href="<?php echo esc_url(site_url('/adoption')) ?>">Adoption</a>
            <a <?php if (is_page('traening')) echo 'class="activePage"' ?>href="<?php echo esc_url(site_url('/traening')) ?>">Træning</a>
            <a <?php if (is_page('mod-holdet')) echo 'class="activePage"' ?>href="<?php echo esc_url(site_url('/mod-holdet')) ?>">Sejr og Davidsen</a>
            <a <?php if (is_page('kontakt')) echo 'class="activePage"' ?>href="<?php echo esc_url(site_url('/kontakt')) ?>">Kontakt</a>
            <a href="#" class="btnYellow">Donér</a>
        </div>
    </nav>
<?php
/**
 * The template for displaying 404 pages (Not Found)
* Created by fuzzy.
* Date: 01/10/2020
* Time: 00:00 AM
* Template name: 404
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset"); ?>" >
    <meta name="viewport" content="width=device-width, intial-scale=1" >
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/style.css'); ?>" />
</head>

<main class="error404">
    <section class="error404-body">
        <div class="error404-body__image">
            <img src="<?php echo get_theme_file_uri('/images/404/404.png'); ?>" />
        </div>
        <a href="<?php echo site_url('/'); ?>"><div class="error404-body__button btn btn--main">Home</div></a>
    </section>
</main>


<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <?php wp_head(); ?>

    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', '<?php echo get_field('google_analytics_id' , 'option'); ?>>');</script>

</head>
<!-- le modele front-page permet d'afficher la page d'accueil -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- Front-page.php -----------</h1> -->
<!-- Section Hero -->
<?php get_template_part('gabarit/hero'); ?>

<!-- Section Formulaire -->
<?php get_template_part('gabarit/formulaire'); ?>

<!-- Section Populaire -->
<?php get_template_part('gabarit/populaire'); ?>

<?php get_footer(); ?>
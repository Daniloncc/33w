<!-- Represente le modele par default -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- single.php -----------</h1> -->

<section class="populaire">

  <?php if (have_posts()) {
    // extraire chaque post
    while (have_posts()) {
      // affichage de l
      // image mise en avant miniature

      the_post();
      the_post_thumbnail('large');
  ?>
      <!-- affichage du titre -->
      <div class="populaire__contenu">
        <header>
          <h2><?php the_title(); ?></h2>
        </header>
        <!-- la fonction qui sert a afficher les images dans le content qu'on met en bas :articles/modifier/+-->
    <?php the_content();
      edit_post_link();
    }
  } ?>
      </div>
</section>

<?php get_footer(); ?>
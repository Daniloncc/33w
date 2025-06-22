<!-- Represente le modele par default -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- category.php -----------</h1> -->


<section class="populaire">
  <h2><?php single_cat_title(); ?></h2>
  <?php echo category_description(); ?>
  <?php if (have_posts()) {
    // extraire chaque post
    while (have_posts()) {
      // affichage de l
      // image mise en avant miniature

      the_post();
      the_post_thumbnail('thumbnail');
  ?>
      <!-- affichage du titre -->
      <h3><?php the_title(); ?></h3>
      <!-- la fonction qui sert a afficher les images dans le content qu[on met en bas :articles/modifier/+-->
  <?php the_content();
    }
  } ?>

  <h2>Les Destinations favorites</h2>
  <hr />
  <div class="populaire__cartes">
    <article class="carte">
      <img src="wp-content/uploads/2025/06/aventure.jpg" alt="jeep dans le desert" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/nature.jpg" alt="foret" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/plage_1.jpg" alt="plage" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/veneza.jpg" alt="Veneza" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/zen.jpg" alt="jardin" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/paris.jpg" alt="paris" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/croisiere.jpg" alt="croisiere" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/chalet.jpg" alt="chalet" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/montagnes.jpg" alt="montagnes" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/aurora_boreel.jpg" alt="aurora boreel" />
    </article>
  </div>
</section>

<?php get_footer(); ?>
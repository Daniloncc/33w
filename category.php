<!-- Represente le modele par default -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- category.php -----------</h1> -->

<section class="categorie">
  <h2><?php single_cat_title(); ?></h2>
  <?php echo category_description(); ?>

  <?php if (have_posts()) { ?>
    <div class="categorie__cartes">
      <?php
      // extraire chaque post
      while (have_posts()) { ?>

        <div class="categorie__carte">
          <header>
            <h3><?php the_title(); ?></h3>
            <?php
            // affichage de l
            // image mise en avant miniature
            the_post();
            the_post_thumbnail('thumbnail');
            ?>
          </header>
          <!-- la fonction qui sert a afficher les images dans le content qu[on met en bas :articles/modifier/+-->
          <?php the_content(); ?>
        </div>
      <?php } ?>

    </div>
  <?php } ?>

</section>

<?php get_footer(); ?>
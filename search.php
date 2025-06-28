<!-- Represente le modele par default -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- search.php -----------</h1> -->

<section class="populaire">
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
            <div class="conteneur__category">
              <?php
              $categories = get_the_category();
              $exclude_name = 'Destination';
              $exclude_name2 = 'Populaire';
              $separator = ', ';
              $output = '';

              if (! empty($categories)) {
                foreach ($categories as $category) {
                  if ($category->name !== $exclude_name && $category->name !== $exclude_name2) {
                    $output .= '<a class="conteneur__category--lien" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>' . $separator;
                  }
                }
                // Retire le dernier séparateur
                echo trim($output, $separator);
              }

              ?>
            </div>
          </header>
          <!-- la fonction qui sert a afficher les images dans le content qu[on met en bas :articles/modifier/+-->
          <?php the_content(); ?>
        </div>
      <?php } ?>

    </div>
  <?php } ?>

</section>

<?php get_footer(); ?>
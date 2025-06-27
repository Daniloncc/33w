<?php
$lien = "<br> <a class='conteneur__category--lien' href=" . get_permalink() . ">Suite</a>";
// template carte 
?>
<article class="conteneur__carte">
    <picture><?php the_post_thumbnail('large'); ?></picture>
    <div class="conteneur__carte-text">
        <h2><?php the_title(); ?></h2>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20, $lien); ?></p>
        <div class="conteneur__temp">
            <small>Temp Max: <i class="conteneur__temp-haut"><?php the_field('temperature_max'); ?>&deg;C</i></small>
            <small>Temp Moyenne: <i class="conteneur__temp-moy"><?php the_field('temperature_moyenne'); ?>&deg;C</i></small>
            <small>Temp Min: <i class="conteneur__temp-min"><?php the_field('temperature_min'); ?>&deg;C</i></small>
        </div>
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
    </div>
</article>
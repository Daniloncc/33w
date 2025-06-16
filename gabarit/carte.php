<?php
$lien = " <a href=" . get_permalink() . ">Suite</a>";
// template carte 
?>
<article class="conteneur__carte">
    <picture><?php the_post_thumbnail('large'); ?></picture>
    <div class="conteneur__carte-text">
        <h2><?php the_title(); ?></h2>
        <p><?php echo wp_trim_words(get_the_excerpt(), 35, $lien); ?></p>
    </div>
</article>
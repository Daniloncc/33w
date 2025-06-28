<!-- Template Hero, poue afficher la section Heroß -->
<section class="hero">
    <picture class="hero__image">
        <img src="wp-content/uploads/2025/06/maldives.1.jpg" alt="Maldives" />
    </picture>
    <?php $hero_auteur = get_theme_mod('hero_auteur', 'Auteur');
    $hero_adresse = get_theme_mod('hero_adresse', 'Adresse');
    $hero_courriel = get_theme_mod('hero_courriel', 'Courriel') ?>
    <div class="hero__contenu">
        <h1 class="hero__titre">
            La vie est une
            <a href="#" class="hero__lien"><strong>Voyage</strong></a>
        </h1>
        <p class="hero__description">
            <?php bloginfo('description') ?>
        </p>
        <small><i class="fa-solid fa-envelope"></i> <?= $hero_courriel ?></small>
        <small><i class="fa-solid fa-location-dot"></i>
            <?= $hero_adresse ?>
        </small>
        <small><i class="fa-solid fa-phone"></i> (123)456-6789</small>
        <br>
        <p>Auteur: <?= $hero_auteur ?></p>
    </div>

</section>